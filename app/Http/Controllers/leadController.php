<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;


class leadController extends Controller
{
    function add(Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $city = $request->input('city');

        $lead = new lead();
        $lead->name = $name;
        $lead->email = $email;
        $lead->phone = $phone;
        $lead->city = $city;

        $lead->save();
        return $lead;
    }

    function edit(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $city = $request->input('city');

        $record = lead::find($id);

        $record->name = $name;
        $record->email = $email;
        $record->phone = $phone;
        $record->city = $city;

        $record->save();
        return $record;
    }

    function get()
    {
        
        $get_leads = lead::all();
        return response()->json($get_leads);
    }


    function delete(Request $request)
    {
        $id = $request->input('id');

        $record = lead::find($id);
        $record->delete();

        $response = array('id' => $id);
        return $response;
    }
}
