<?php

namespace App\Http\Controllers;

use App\Models\Appearance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;
use RealRashid\SweetAlert\Facades\Alert;

class AppearanceController extends Controller
{


    public function admin()
    {
        $appearances = Appearance::all();
        return view('admin.cert_appearance.admin',compact('appearances'));
    }

    public function index()
    {
        $appearances = Appearance::where('user_id', auth()->user()->id)->get();
        return view('admin.cert_appearance.index',compact('appearances'));
    }

    public function add(){
        return view('admin.cert_appearance.add');
    }

    public function viewpdf($id)
    {
        $appearance = Appearance::find($id);
        return view('admin.cert_appearance.viewpdf',compact('appearance'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // try{
            Appearance::create([
                'user_id'=> auth()->user()->id,
                'fullname'=> $request->fullname,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'office' => $request->office,
                'venue' => $request->venue,
                'venue_address' => $request->venue_address,
                'purpose' => $request->purpose,
                'approved_by' => $request->approved_by,
                'designation' => $request->designation,
            ]);
            return view('admin.cert_appearance.success');
            return redirect()->back();

        //     } catch(\Exception $e){
        //     Alert::warning('Something went wrong, please try again.');
        //     return redirect()->back();
        // }
        // Alert::success('Success', 'Request Sent!');
        // return redirect()->back();
    }

    public function edit($id)
    {
        $data = Appearance::find($id);
        return view('admin.cert_appearance.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Appearance::find($id);
        $data->fullname = $request->input('fullname');
        $data->date_start = $request->input('date_start');
        $data->date_end = $request->input('date_end');
        $data->office = $request->input('office');
        $data->venue = $request->input('venue');
        $data->venue_address = $request->input('venue_address');
        $data->purpose = $request->input('purpose');
        $data->approved_by = $request->input('approved_by');
        $data->designation = $request->input('designation');
        $data->save();
        return view('admin.cert_appearance.success');
        return redirect()->back();
    }

    public function delete($id)
    {
        Appearance::destroy($id);
        return redirect()->back();
    }

}
