<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        $assets = Admin::all();
        return view('admin.welcome', ['main' => $assets]);
    }

    public function insert(){
        return view('admin.form');
    }

    public function details(){
        $assets = Admin::all();
        return view('admin.records', ['main' => $assets]);
    }

    public function profile(){
        return view ('admin.profile');
    }

    public function report(){
        return view ('admin.report');
    }

    public function store(){
        $asset = new Admin();

        $asset->serialID = "AC". request('serial');
        $asset->name = request('name');
        $asset->price = request('price');
        $asset->received = request('date');
        $asset->status = "Active";

        $asset->save();
        return redirect('admin');
    }


    public function show($id){
        $asset = Admin::findOrFail($id);
        return view('admin.show', ['asset'=>$asset]);
    }
}
