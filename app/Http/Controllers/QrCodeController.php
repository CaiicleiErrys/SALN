<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{

    public function show()
    {
        return QrCode::size(300)
            ->style('dot')
            ->eye('circle')
            // ->margin(1)
            ->generate('DATA HERE',);
    }

    // public function show($userId)
    // {
    //     // Retrieve the user data from the database
    //     $user = User::find($userId);

    //     // Check if the user exists
    //     if (!$user) {
    //         abort(404); // Or handle the case where the user doesn't exist
    //     }

    //     // Generate a QR code using the user's data
    //     $qrcode = QrCode::size(300)
    //         ->style('dot')
    //         ->eye('circle')
    //         // ->margin(1)
    //         ->generate(json_encode($user)); // Encode user data as JSON

    //     // Return the QR code image
    //     return response($qrcode)->header('Content-Type', 'image/png');
    // }

}
