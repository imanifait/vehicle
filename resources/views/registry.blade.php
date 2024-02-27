<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vehicle registry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Vehicle Registry</h2>
                <div style="float: right">
                    <a href="{{url('AddVehicle')}}" class="btn btn-primary">Add Vehicle</a>
                    <a href="{{url('Vehicletype')}}" class="btn btn-primary">view Vehicletype</a>
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}    
                </div>                 
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Vehicle type</th>
                            <th>capacity</th>
                            <th>numberplate</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($data as $reg)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$reg->vehicle_type}}</td>
                            <td>{{$reg->capacity}}</td>
                            <td>{{$reg->numberplate}}</td>
                            <td><a href="{{url('editVehicle/'.$reg->id)}}" class="btn btn-primary">Edit</a> |
                                 <a href="{{url('deleteVehicle/'.$reg->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>                          
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>