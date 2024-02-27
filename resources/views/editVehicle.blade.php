<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Vehicle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Vehicle</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}    
                </div>                 
                @endif
                <form method="post" action="{{url('updateVehicle')}}">
                    @csrf
                    <input type="hidden" Name="id" value="{{$data->id}}">
                    <div class="md-3"> 
                        <label class="form-label">vehicle_name</label>
                        <select class="form-select" name="Vehicletype" id="Vehicletype">
                            <option value="vehicletype">Vehicletype</option> 
                            <option value="Trailer">Trailer</option> 
                            <option value="pick-up">Pick-up</option> 
                            <option value="tuktuk">Tuktuk</option> 
                            <option value="lorry">Lorry</option>
                    </select>
                    </div>
                    <div class="md-3">
                        <label class="form-label">Capacity</label>
                        <input type="text" class="form-control" Name="capacity" placeholder="Enter the Capacity" value="{{$data->capacity}}">
                        @error('capacity')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}    
                            </div>   
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Number Plate</label>
                        <input type="text" class="form-control" Name="numberplate" placeholder="Enter Number Plate" value="{{$data->numberplate}}">
                        @error('numberplate')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}    
                            </div>   
                        @enderror
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('registry')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>