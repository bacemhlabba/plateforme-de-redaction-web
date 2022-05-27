<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\UploadedFile;
class RegisteredUserController extends Controller
{
    
    public function create()
    {
        return view('inscription_redacteur');
    }
    
   
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'CIN' => ['required', 'string','min:8','max:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'CV' => ['required', 'mimes:pdf,word','max:5048'],
            
        ]);
        
        // add CV
        $newCV=time().'-'.$request->name.'.'.$request->CV->extension();
        $request->CV->move(public_path('CVs',$newCV));
         
        $user = User::create([
            'name' => $request->name,
            'CIN' => $request->CIN,
            'email' => $request->email,
            'password_not_hashed' => $request->password,
            'password' => Hash::make($request->password),
            'CV'=>$newCV,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
