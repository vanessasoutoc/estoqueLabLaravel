<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request as LoRequest;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

use Auth;
use Request;

class LoginController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function login()
	{
		$credenciais = Request::only('email', 'password');

		if(Auth::attempt($credenciais)){
			return "Usuário ".Auth::user()->name." logado com sucesso";
		}
		return "As credenciais não são válidas.";
		
		if(Auth::attempt($credenciais, true)){
			
		}
	}

	public function index()
	{

	}

	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create()
	{
		//
	}

	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request)
	{
		//
	}

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function show($id)
	{
		//
	}

	/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function edit($id)
	{
		//
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
		//
	}

	/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function destroy($id)
	{
		//
	}
}
