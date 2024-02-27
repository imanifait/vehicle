<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Vehicletype</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Vehicletype</h2>
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}    
                    </div>                 
                    @endif
                    <form method="post" action="{{url('updateVehicletype')}}">
                        @csrf
                        <input type="hidden" Name="id" value="{{$data->id}}">
                        <div class="md-3">
                            <label class="form-label">Vehicle Type</label>
                            <input type="text" class="form-control" Name="vehicle_type_description" placeholder="Enter Vehicletype" value="{{$data->vehicle_type_description}}">
                            @error('vehicle_type_description')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}    
                                </div>   
                            @enderror
                        </div><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('Vehicletype')}}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>