<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DemoController extends Controller
{
    public function demoAdmin(\App\Models\User $user)
    {
        // User::where('is_admin', 1)
        //     ->where('email', )
        //     ->select('');

        if (Auth::attempt(['email' => 'admin@admin.com', 'password' => 'password'])) {
            // if(Auth::attempt(['email' => 'admin@admin.com', 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'])) {
            if (Auth::user()->is_admin == 1) {
                return redirect()->route('dashboard');
            }
        }
    }
}
