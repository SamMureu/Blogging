<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
{
    // Validate the request data
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to authenticate the user
    if (Auth::attempt($validatedData)) {
        $user = Auth::user();

        // Check the user's type
        if ($user->usertype === 'admin') {

            return redirect()->route('admin.dashboard')->with('success', 'Welcome, admin!');
         return 0;
        } elseif ($user->usertype === 'user') {
            return redirect()->route('home_page')->with('success', 'Welcome, user!');
        } else {
            Auth::logout(); // Log out the user
            return redirect()->back()->with('error', 'Invalid user type');
        }
    } else {
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}

        
        
        //         // $test=$request->authenticate();
// dd($test);
//         $request->session()->regenerate();
//         if($request->user()->usertype ==='admin'){
//             return redirect('admin/dashboard');
//         }

        //return redirect()->intended(route('dashboard'));
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
