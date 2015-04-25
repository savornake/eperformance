<?php

class TapkinController extends \BaseController {

	/**
	 * Display a listing of tapkins
	 *
	 * @return Response
	 */
	public function index()
	{
		$tapkins = Tapkin::all();

		return View::make('tapkins.index', compact('tapkins'));
	}

	/**
	 * Show the form for creating a new tapkin
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tapkins.create');
	}

	/**
	 * Store a newly created tapkin in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Tapkin::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Tapkin::create($data);

		return Redirect::route('tapkins.index');
	}

	/**
	 * Display the specified tapkin.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tapkin = Tapkin::findOrFail($id);

		return View::make('tapkins.show', compact('tapkin'));
	}

	/**
	 * Show the form for editing the specified tapkin.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tapkin = Tapkin::find($id);

		return View::make('tapkins.edit', compact('tapkin'));
	}

	/**
	 * Update the specified tapkin in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tapkin = Tapkin::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Tapkin::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$tapkin->update($data);

		return Redirect::route('tapkins.index');
	}

	/**
	 * Remove the specified tapkin from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Tapkin::destroy($id);

		return Redirect::route('tapkins.index');
	}

}
