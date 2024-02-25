<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('datapegawai', compact('data'));
    }
    public function tambahpegawai(){
        $data = Employee::all();
        return view('tambahdata', compact('data'));
    }
    public function insertdata(Request $request){
        // dd($request->all());
        $data = Employee::create($request->all());
        if($request->hasFile('img')){
            $request->file('img')->move('imgpegawai/', $request->file('img')->getClientOriginalName());
            $data->img = $request->file('img')->getClientOriginalName();
            $data -> save();
        }
        
        return redirect()-> route("pegawai")->with('success', 'Data Berhasil di Inputkan');
    }

    public function tampildata($id){
        $data= Employee::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()-> route("pegawai")->with('success', 'Data Berhasil diUpdate');
    }

    public function hapusdata($id){
        $data=Employee::find($id);
        $data->delete();
        return redirect()-> route("pegawai")->with('success', 'Data Berhasil di Hapus');
    }
}
