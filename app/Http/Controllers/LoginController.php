<?php
namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLog;


class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }
    public function showRegister(){
        return view('auth.register');
    }

    public function authenticate(Request $request){

        $formFields=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            UserLog::create([
                'user_id' => auth()->id(),
                'action' => 'user logedin',
            ]);
            $userId = Auth::id(); // Get the authenticated user's ID
            // return view('admin.index')->with('userId', $userId);
            return redirect('/admin')->with('userId', $userId);
        }
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');

    }

    public function admin(){
        return view('admin.index');
    }


    public function store(Request $req){

        $formFields = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:3|confirmed',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $user = USER::create($formFields);
        auth()->login($user);
        return redirect('/login')->with('message','User Created and Now You Can login');
    }

    public function logout(Request $req){
        // auth()->logout();
        // $req->session()->invalidate();
        // $req->session()->regenerateToken();
        // return redirect('/')->with('message','User LogedOut');
        Auth::logout();
        UserLog::create([
            'user_id' => $req->user_id,
            'action' => 'user loged out',
        ]);
       return redirect('/');
    }










}
