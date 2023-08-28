<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendVerificationEmail;
use Ramsey\Uuid\Uuid;
use App\Models\User;


class VerificationController extends Controller
{
    public function sendEmail(Request $request)
    {
        $userId = Auth::user();
        $user = User::find($userId); 
        $uuid4 = Uuid::uuid4();
        $otp = substr($uuid4->toString(), 0, 6);
        dispatch(new SendVerificationEmail ( $user, $otp));
        
        return response()->json(['message' => 'Verification email sent']);
    }
}
