<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Signin(){
        return view('user.SigninPage');
    }

    public function LoginUser(Request $request){
        $currentuser = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($currentuser)){
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->roles_id == 1) { // Jobseeker
                return redirect()->route('home')->with('success', 'Welcome, Jobseeker!');
            } elseif ($user->roles_id == 2) { // Hirer
                return redirect()->route('hirer.home')->with('success', 'Welcome, Hirer!');
            } elseif ($user->roles_id == 3) { // Admin
                return redirect()->route('admin.users')->with('success', 'Welcome, Admin!');
            }

            return redirect('/CuyKerja')->with('success', 'Welcome!');
    
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }  

    public function Register(){
        $allroles = Role::all();
        $allcompanies = Company::all();
        return view('user.RegisterPage', compact('allroles', 'allcompanies'));
    }

    public function StoreUser(Request $request){
        $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'roles_id' => 'required|in:1,2',
            'companies_id' => 'required',
        ]);

        $newuser = new User();
        $newuser->name = $request->input('name');
        $newuser->email = $request->input('email');
        $newuser->password = bcrypt($request->input('password'));
        $newuser->roles_id = $request->input('roles_id');
        $newuser->companies_id = $request->input('companies_id');
        $newuser->remember_token = Str::random(60);
        $newuser->email_verified_at = now();
        $newuser->save();

        Auth::login($newuser);

        return redirect()->route('home')->with('success', 'New User Registered and Login!');
    }

    public function LogOutUser(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'You have been Logout!');
    }

    public function CreateCompanyForm(){
        return view('user.createcompany');
    }

    public function StoreCompany(Request $request){
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_description' => 'required|string',
        ]);

        $newcompany = new Company();
        $newcompany->Nama_Perusahaan = $request->input('company_name');
        $newcompany->description = $request->input('company_description');
        $newcompany->save();

        return redirect()->route('register')->with('success', 'New Company Added');
    }

    public function DeleteUser($id){
        $user = User::find($id);

        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }
}
