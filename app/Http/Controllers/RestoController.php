<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\User;
use Session;

class RestoController extends Controller
{
    function index()
    {
    	return view('home');
    }
    function list()
    {
        $data = Restaurant::all();
        return view('list',['list' => $data]);
    }
    function add()
    {
    	return view('add');
    }
    function store(Request $r)
    {
    	$rest = new Restaurant;
    	$rest->name = $r->name;
    	$rest->email = $r->email;
    	$rest->address = $r->address;
    	$rest->save();
        $r->session()->flash('status', 'Restaurant Added Successfully!');
    	return redirect('list');
    }
    function delete($id)
    {
        Restaurant::find($id)->delete();
        Session::flash('status', 'Restaurant Deleted Successfully!');
        return redirect('list');
    }
    function edit($id)
    {
        $data = Restaurant::find($id);
        return view('edit', ['data' => $data]);
    }
    function update(Request $r)
    {
        $rest = Restaurant::find($r->id);
        $rest->name = $r->name;
        $rest->email = $r->email;
        $rest->address = $r->address;
        $rest->save();
        $r->session()->flash('status', 'Restaurant updated Successfully!');
        return redirect('list');
    }
    function login()
    {
        return view('auth.login');
    }
    function register()
    {
        return view('auth.register');
    }
    function logout()
    {
        Auth::logout();
    }
}
