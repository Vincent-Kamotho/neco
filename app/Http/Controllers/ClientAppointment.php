<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentDeclineResponse;
use App\Mail\AppointmentApprovalResponse;

class ClientAppointment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.appointments.appointments')->with('appointments' , $appointments);
    }
    
    public function sendEmail(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $information = $request->input('message');
        

        Mail::to('vinsentwambugu@gmail.com')->send(new ContactUs($fname, $lname, $subject, $email , $information));
        return redirect()->to('contact-us')->with('success', 'Your email has been sent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|regex:/07\d{8}$/',
            'email' => 'required|email|unique:appointments,email',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'issue' => 'required'
        ], [
            'email.unique' => 'This email has been used by somebody who currently is having an appointment.',
        ]);


        $isSlotTaken = Appointment::where('date', $request->date)
                                    ->where('time' , $request->time)
                                    ->exists();

        if($isSlotTaken) {
            return redirect()->back()->with('error', 'The time slot in the selected date is already taken. Please choose another.');
        }

        $appointment = new Appointment;
        $appointment->names = $request->input('name');
        $appointment->phone = $request->input('phone');
        $appointment->email = $request->input('email');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->issue = $request->input('issue');
        $appointment->save();
        return redirect()->back()->with('success', 'Appointment Request has been sent. We shall get back to you for confirmation');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ApproveRequest($id)
    {
        $appointmentApproval = DB::table('appointments')->where('id' , $id)->first();

        if($appointmentApproval){
            $appointmentData = (array) $appointmentApproval;
            unset($appointmentData['id']);

            //Add the 'Status' field with 'Approved' value
            $appointmentData['status'] = 'Approved';

            //Insert the modified appointment data in the 'schedules' table
            DB::table('schedules')->insert($appointmentData);
            Mail::to($appointmentApproval->email)->send(new AppointmentApprovalResponse($appointmentApproval));

            //Delete the approved record from the 'appointment' table
            DB::table('appointments')->where('id' , $id)->delete();
            return redirect()->to('admin/appointments')->with('success', 'Appointment Approved');
        }
    }

    public function DeclineRequest($id)
    {

        $appointmentDecline = DB::table('appointments')->where('id' , $id)->first();

        if($appointmentDecline){
            $appointmentData = (array) $appointmentDecline;
            unset($appointmentData['id']);

            //Add the 'status' field with the 'Declined' value
            $appointmentData['status'] = 'Declined';

            //Insert the modified data in the 'schedule' table
            DB::table('schedules')->insert($appointmentData);
            Mail::to($appointmentDecline->email)->send(new AppointmentDeclineResponse($appointmentDecline));

            //Delete the declined appointment from the 'children_counsellings' table
            DB::table('appointments')->where('id' , $id)->delete();
            return redirect()->to('admin/appointments')->with('failed','Appointment Declined');
        }
        // $appointment = Appointment::find($id);

        // Mail::to($appointment->email)->send(new AppointmentDeclineResponse($appointment));
    }
}
