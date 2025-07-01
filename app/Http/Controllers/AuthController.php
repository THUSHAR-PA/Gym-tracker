<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function showLogin() {
    return view('auth.login');
  }

  public function login(Request $req) {
    $req->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);
    if (Auth::attempt($req->only('email', 'password'))) {
      $req->session()->regenerate();
      return redirect()->intended('/');
    }
    return back()->withErrors(['email' => 'Invalid credentials']);
  }

  public function showRegister() {
    return view('auth.register');
  }

  public function register(Request $req) {
    $req->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6|confirmed'
    ]);

    $user = User::create([
      'name' => $req->name,
      'email' => $req->email,
      'password' => Hash::make($req->password),
    ]);

    Auth::login($user);
    return redirect('/');
  }

  public function logout(Request $req) {
    Auth::logout();
    $req->session()->invalidate();
    $req->session()->regenerateToken();
    return redirect('/login');
  }
}
