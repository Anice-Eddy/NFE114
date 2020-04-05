<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserControllerREST extends Controller
{
    private function utilisateur_est_valide($user) {
        $valide = TRUE;
        if(
               $user['name']     === null
            || $user['email']    === null
            || $user['password'] === null
        ) {
            $valide = FALSE;
        }
        if(!preg_match("/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/", $user['email'] ) ) {
            $valide = FALSE;
        }
        if(strlen($user['password'])<8) {
            $valide = FALSE;
        }
        return $valide;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('usersREST.liste', ['utilisateurs' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usersREST.formAjout');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user           = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->password;
        if($this->utilisateur_est_valide($user)) {
            $user->save();
            return view('usersREST.liste', ['utilisateurs' => User::all()]);
        } else {
            return view('usersREST.liste', ['utilisateurs' => User::all(), 'erreurs' => ['Saisie non valide']]);
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('usersREST.show', ['utilisateur' => User::find($id)->toArray()]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usersREST.formEdit', ['utilisateur' => $user]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->password;
        if($this->utilisateur_est_valide($user)) {
            $user->save();
            return view('usersREST.liste', ['utilisateurs' => User::all()]);
        } else {
            return view('usersREST.liste', ['utilisateurs' => User::all(), 'erreurs' => ['Saisie non valide']]);
        }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return view('usersREST.delete', ['utilisateurs' => User::all()]);
    }
}
