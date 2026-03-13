<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;
use App\Models\chef_profile; 
use App\Models\chef_document;
use App\Models\ChefPayment;
use App\Models\chef_bank;
use App\Models\EventType;
use App\Models\Address;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use App\Services\OtpService;
use Spatie\Permission\Models\Role;

class ChefdashboardController extends Controller
{
    public function chefDashboard(Request $request)
{
    $chef = $request->user();

    if (!$chef) {
        return response()->json([
            'status' => false,
            'message' => 'Unauthenticated'
        ], 401);
    }

    // Onboarding status
    $onboardingPaid = $chef->onboarding_paid == 1;

    // Total bookings
    $totalBookings = Booking::where('chef_id', $chef->id)->count();

    // Total earnings
    $totalEarnings = Booking::where('chef_id', $chef->id)
                        ->where('status', 'confirmed')
                        ->sum('total_amount');

    // Chef availability
    $chefProfile = $chef->chefProfile;
    $isAvailable = $chefProfile ? $chefProfile->is_available : false;

    return response()->json([
        'status' => true,
        'data' => [
            // 'chef_id' => $chef->id,
            // 'chef_name' => $chef->name,

            'onboarding_paid' => $onboardingPaid,

            // 'availability' => [
                'is_available' => $isAvailable,
                // 'status_text' => $isAvailable ? 'ONLINE' : 'OFFLINE'
            // ],

            // 'booking_stats' => [
                'total_bookings' => $totalBookings,
                'total_earnings' => $totalEarnings
            // ]
        ]
    ]);
}
}
