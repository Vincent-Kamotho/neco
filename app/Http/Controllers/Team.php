<?php

namespace App\Http\Controllers;

use App\Models\Counsellor;
use Illuminate\Http\Request;

class Team extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CounsellorIndex()
    {
        $counsellor = Counsellor::all();
        return view('admin.team.counsellor.counsellors')->with('counsellor' , $counsellor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCounsellor()
    {
        return view('admin.team.counsellor.addcounsellor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCounsellor(Request $request)
    {
        $request->validate([
            'names' =>'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^07\d{8}$/|min:10',
            'organization' => 'required'
        ]);

        $counsellor = new Counsellor;
        $counsellor->names = $request->input('names');
        $counsellor->email = $request->input('email');
        $counsellor->phone = $request->input('phone');
        $counsellor->organization = $request->input('organization');
        $counsellor->save();
        return redirect()->to('admin/team/counsellors')->with('success', 'Counsellor Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCounsellor($id)
    {
        $counsellor = Counsellor::find($id);
        return view('admin.team.counsellor.editcounsellor')->with('counsellor' , $counsellor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCounsellor(Request $request, $id)
    {
        $request->validate([
            'names' =>'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^07\d{8}$/|min:10',
            'organization' => 'required'
        ]);

        $counsellor = Counsellor::find($id);
        $counsellor->names = $request->input('names');
        $counsellor->email = $request->input('email');
        $counsellor->phone = $request->input('phone');
        $counsellor->organization = $request->input('organization');
        $counsellor->update();
        return redirect()->to('admin/team/counsellors')->with('success', 'Counsellor Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCounsellor($id)
    {
        $counsellor = Counsellor::find($id);
        $counsellor->delete();
        return redirect()->to('admin/team/counsellors')->with('failed', 'Counsellor Successfully Deleted');
    }
}
