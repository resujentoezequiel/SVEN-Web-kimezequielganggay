<?php

namespace App\Classes;

use App\Models\AppointmentModel;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AppointmentClass
{

    public function add_appointment(Request $request) {

        $appointment_date = $request['appointment_date'];
        $appointment_time = $request['appointment_time'];
        $notes = htmlspecialchars($request['notes']);
        $user = Auth::user();

        $datetime = DateTime::createFromFormat('d/m/Y', $appointment_date);
        $formattedDate = $datetime->format('Y-m-d');


        AppointmentModel::create([
            'customer_name' => $user->name
            , 'appointment_date' => $formattedDate
            , 'appointment_time' => $appointment_time
            , 'notes' => $notes
            , 'created_at' => date("Y-m-d H:i:s")
        ]);

        return back()->with('success','You have successfully added the new schedule.');
    }


}
