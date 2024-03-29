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
                <h2>Add Vehicle</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}    
                </div>                 
                @endif
                <form method="post" action="{{url('saveVehicle')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-label">Vehicle Type</label>
                        <select name="vehicle_type" id="vehicle_type">
                            @foreach($vehicleTypes as $vehicleType)
                                <option value="{{ $vehicleType->vehicle_type }}">{{ $vehicleType->vehicle_type }}</option>
                            @endforeach
                        </select>
                    <div class="md-3">
                        <label class="form-label">Capacity</label>
                        <input type="text" class="form-control" name="capacity" placeholder="Enter the Capacity" value="{{old('capacity')}}">
                        @error('capacity')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}    
                            </div>   
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Number Plate</label>
                        <input type="text" class="form-control" name="numberplate" placeholder="Enter Number Plate" value="{{old('numberplate')}}">
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