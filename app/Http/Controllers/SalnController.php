<?php

namespace App\Http\Controllers;

use App\Models\Saln;
use Illuminate\Http\Request;

class SalnController extends Controller
{
    public function index()
    {
        $salns = Saln::where('user_id', auth()->user()->id)->get();
        return view('admin.saln.index', compact('salns'));
    }

    public function add()
    {
        return view('admin.saln.add');
    }

    public function edit($id)
    {
        $saln = Saln::find($id);
        return view('admin.saln.edit', compact('saln'));
    }

    public function store(Request $request)
    {
        $saln = Saln::create([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'position' => $request->position,
            'department' => $request->department,
            'agency' => $request->agency,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'date_filed' => $request->date_filed,
            'real_properties' => $request->real_properties,
            'personal_properties' => $request->personal_properties,
            'total_assets' => $request->real_properties + $request->personal_properties,
            'liabilities' => $request->liabilities,
            'business_interests' => $request->business_interests,
            'financial_connections' => $request->financial_connections,
            'relatives_in_government' => $request->relatives_in_government,
        ]);

        $saln->net_worth = $saln->total_assets - $saln->liabilities;
        $saln->save();

        return redirect()->route('saln.index');
    }

    public function update(Request $request, $id)
    {
        $saln = Saln::find($id);
        $saln->name = $request->input('name');
        $saln->date_of_birth = $request->input('date_of_birth');
        $saln->position = $request->input('position');
        $saln->department = $request->input('department');
        $saln->agency = $request->input('agency');
        $saln->email = $request->input('email');
        $saln->contact_number = $request->input('contact_number');
        $saln->date_filed = $request->input('date_filed');
        $saln->real_properties = $request->input('real_properties');
        $saln->personal_properties = $request->input('personal_properties');
        $saln->total_assets = $request->input('real_properties') + $request->input('personal_properties');
        $saln->liabilities = $request->input('liabilities');
        $saln->business_interests = $request->input('business_interests');
        $saln->financial_connections = $request->input('financial_connections');
        $saln->relatives_in_government = $request->input('relatives_in_government');
        $saln->net_worth = $saln->total_assets - $saln->liabilities;
        $saln->save();

        return redirect()->route('saln.index');
    }

    public function delete($id)
    {
        Saln::destroy($id);
        return redirect()->back();
    }

    public function viewpdf($id)
    {
        $saln = Saln::find($id);
        return view('admin.saln.viewpdf', compact('saln'));
    }
}
