<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\vehicle_type;

class vehicleController extends Controller
{
    public function registry(){
        $data = Vehicle::get();
        //return $data;
        return view('registry',compact('data'));
    }
    public function AddVehicle(){
        $vehicleTypes = vehicle_type::all();
        return view('AddVehicle', compact('vehicleTypes'));
    }
    public function saveVehicle(Request $request){
        $request->validate([
            'vehicle_type'=>'required',
            'capacity'=>'required',
            'numberplate'=>'required',
        ]);

        $vehicle_type = $request->vehicle_type;
        $capacity = $request->capacity;
        $numberplate = $request->numberplate;

        $reg = new Vehicle();
        $reg->vehicle_type = $vehicle_type;
        $reg->capacity = $capacity;
        $reg->numberplate = $numberplate;
        $reg->save();

        return redirect()->back()->with('success', 'Vehicle registered successfully');
    }
    
    public function editVehicle($id){
        $data = Vehicle::where('id','=',$id)->first();
        return view('editVehicle',compact('data'));
    }
    public function updateVehicle(Request $request){
        $request->validate([
            'vehicle_name'=>'required',
            'capacity'=>'required',
            'numberplate'=>'required',
        ]);

        $id = $request->id;
        $vehicle_name = $request->vehicle_name;
        $capacity = $request->capacity;
        $numberplate = $request->numberplate;

        Vehicle::where('id','=',$id)->update([
            'name'=>$vehicle_name,
            'capacity'=>$capacity,
            'numberplate'=>$numberplate,
        ]);
        return redirect()->back()->with('success', 'Vehicle updated successfully');
    }
    public function deleteVehicle($id){
        $data = Vehicle::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Vehicle deleted successfully');
    }   
    public function Vehicletype(){
        $data = vehicle_type::get();
        return view('Vehicletype',compact('data'));
    }
    public function saveVehicletype(Request $request){
        $request->validate([
            'vehicle_type'=>'required',
        ]);

        $vehicle_type = $request->vehicle_type;

        $reg = new vehicle_type();
        $reg->vehicle_type = $vehicle_type;
        $reg->save();

        return redirect()->back()->with('success', 'Vehicletype registered successfully');
    }
    public function RegVehicletype(){
        return view('RegVehicletype');
    }
    public function deleteVehicle1($id){
        $data = vehicle_type::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Vehicletype deleted successfully');
    }
    public function editVehicle1($id){
        $data = vehicle_type::where('id','=',$id)->first();
        return view('editVehicle1',compact('data'));
    }
    public function updateVehicletype(Request $request){
        $request->validate([
            'vehicle_type'=>'required',
        ]);

        $id = $request->id;
        $vehicle_type = $request->vehicle_type;

        vehicle_type::where('id','=',$id)->update([
            'vehicle_type'=>$vehicle_type,
        ]);
        return redirect()->back()->with('success', 'Vehicletype updated successfully');
    } 
    public function index(){
        $data = vehicle_type::with('vehicle_type')->get();
        return view('RegVehicletype',compact('data'));
    }
}
        