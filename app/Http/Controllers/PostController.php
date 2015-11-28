<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$posts = [
			0 => [
				'title'    => 'Man must explore, and this is exploration at its greatest',
				'subtitle' => 'Problems look mighty small from 150 miles up',
				'author'   => 'Felipe Minello',
				'date'     => 'September 24, 2014'],
			1 => [
				'title'    => 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.',
				'subtitle' => null,
				'author'   => 'Felipe Minello',
				'date'     => 'September 18, 2014'],
			2 => [
				'title'    => 'Science has not yet mastered prophecy',
				'subtitle' => 'We predict too much for the next year and yet far too little for the next ten.',
				'author'   => 'Felipe Minello',
				'date'     => 'August 24, 2014'],
			3 => [
				'title'    => 'Failure is not an option',
				'subtitle' => 'Many say exploration is part of our destiny, but it’s actually our duty to future generations.',
				'author'   => 'Felipe Minello',
				'date'     => 'July 8, 2014'],

		];

		return view('index', compact('posts'));
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
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int                      $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
