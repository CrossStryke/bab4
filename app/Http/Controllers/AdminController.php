<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;

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

    public function viewPDF(){
        $month = request('month');

        $pdf = Admin::whereMonth('updated_at', $month)->get();

        return view('admin.view_pdf', ['results'=> $pdf]);
    }

    public function createPDF(){
        // $data = $this;
        // view()->share('main', $data);
        // $pdf = PDF::loadView('admin/pdf-record', compact('data'))->output();
    
        // // Create a Laravel response object with the PDF content and headers
        // return response($pdf)
        //     ->header('Content-Type', 'application/pdf')
        //     ->header('Content-Disposition', 'inline; filename="record.pdf"');
    }
    
}
