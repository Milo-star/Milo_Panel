<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'L\'adresse e-mail est requise',
            'email.email' => 'L\'adresse e-mail n\'est pas valide',
            'password.required' => 'Le mot de passe est requis',
        ]);
    
        if (Auth::attempt($credentials)) {
            // L'utilisateur est authentifié
            return redirect()->intended('/dashboard');
        }
    
        // Si l'authentification a échoué, retourne à la page de connexion avec une erreur
        return back()->withErrors([
            'email' => 'Email ou mot de passe invalide',
        ]);
    }
    
}
