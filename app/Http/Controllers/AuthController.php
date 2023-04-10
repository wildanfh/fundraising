<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function index()
  {
    if (Auth::check()) {
      return redirect('/contributors');
    }
    return view('auth.login');
  }

  public function customLogin(Request $request)
  {
    $request->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
      return redirect('/contributors')
        ->with('success', 'Signed in');
    }

    return redirect("login")->with('error', 'Wrong Email / Password');
  }

  public function registration()
  {
    return view('auth.register');
  }

  public function customRegistration(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6',
    ]);

    $data = $request->all();
    $check = $this->create($data);

    return redirect("/contributors");
  }

  public function create(array $data)
  {
    return User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password'])
    ]);
  }

  public function dashboard()
  {
    if (Auth::check()) {
      return redirect('/contributors');
    }

    return redirect("login")->with('success', 'User berhasil dibuat, Silahkan login');
  }

  public function signOut()
  {
    session()->regenerate();
    Auth::logout();

    return Redirect('login');
  }
}
