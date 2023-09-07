<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){

        return view('admin.welcome');
    }

    public function insert(){
        return view('admin.form');
    }

    public function details(){
        return view('admin.records');
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
        return view('/admin/show');
    }
}
