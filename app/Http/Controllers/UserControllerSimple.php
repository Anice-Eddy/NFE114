<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerSimple extends Controller
{
    private $users = [
        ['id' => 1, 'name' => 'user1', 'email' => 'user1@domaine.com', 'password' => 'user1pwd'],
        ['id' => 2, 'name' => 'user2', 'email' => 'user2@domaine.com', 'password' => 'user2pwd'],
        ['id' => 3, 'name' => 'user3', 'email' => 'user3@domaine.com', 'password' => 'user3pwd']
    ];

    public function liste() {
        return view('usersSimple.liste', ['utilisateurs' => $this->users]);
    }
    
    public function formAjout() {
        return view('usersSimple.formAjout');
    }
    
    public function sauvegarder(Request $request) {
        $this->users[] = ['id' => $request->id, 'name' => $request->name, 'email' => $request->email, 'password' => $request->mdp];
        return view('usersSimple.liste', ['utilisateurs' => $this->users]);
    }
}
