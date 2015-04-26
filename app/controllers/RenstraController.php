<?php

class RenstraController extends \BaseController {

	/**
	 * Display a listing of renstras
	 *
	 * @return Response
	 */
	public function index()
	{
		$renstras = Renstra::all();

		return View::make('renstras.index', compact('renstras'));
	}

	/**
	 * Show the form for creating a new renstra
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('renstras.create');
	}

	/**
	 * Store a newly created renstra in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Renstra::$rules);

		if ($validator->fails())
		{
			//return Redirect::back()->withErrors($validator)->withInput();
			return [
				'status'	=> 'fail',
				'messages'	=> $validator
			];
		}

		if(Renstra::create($data)) 
		{
			return [
				'status'	=> 'success'
			];
		} 
		else 
		{
			return [
				'status'	=> 'fail'
			];
		}

	}

	/**
	 * Display the specified renstra.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$renstra = Renstra::findOrFail($id);

		return View::make('renstras.show', compact('renstra'));
	}

	/**
	 * Show the form for editing the specified renstra.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$renstra = Renstra::find($id);

		return View::make('renstras.edit', compact('renstra'));
	}

	/**
	 * Update the specified renstra in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$renstra = Renstra::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Renstra::$rules);

		if ($validator->fails())
		{
			//return Redirect::back()->withErrors($validator)->withInput();
			return [
				'status'	=> 'fail',
				'messages'	=> $validator
			];
		}

		if($renstra->update($data)) 
		{
			return [
				'status'	=> 'success'
			];
		} 
		else 
		{
			return [
				'status'	=> 'fail'
			];
		}

		//return Redirect::route('renstras.index');
	}

	/**
	 * Remove the specified renstra from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Renstra::destroy($id);

		//return Redirect::route('renstras.index');
		return [
			'status'	=> 'success'
		];
	}

	/**
	 * Display json of all rencana strategis
	 * @return [type]
	 */
	public function postJson()
	{
		return Renstra::all();
		
	}

}
