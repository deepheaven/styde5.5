<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	if(request()->has('empty')){
    		$users = [];
    	} else {
    		$users = [
    			'Joel',
    			'Ellie',
    			'Tomy',
    			'Bill',
    			'Tess'
    		];    		
    	}

    	$title = 'Lista de usuarios';

    	// var_dump(compact('title', 'users')); die();
    	// dd(compact('title', 'users'));

    	return view('users', compact('title', 'users'));

    	// return view('users', [
    	// 	'users' => $users,
    	// 	'title' => $title
    	// ]);

    	// return view('users')->with([
    	// 	'users' => $users,
    	// 	'title' => 'Lista de usuarios'
    	// ]);

    	// return view('users')
    	// 	->with('users', $users)
    	// 	->with('title', 'Lista de usuarios');
    }

    public function show($id){
    	return "Mostrando detalle del usuario: {$id}";
    }

    public 
    function create(){
    	return "Crear nuevo usuario";
    }
}
