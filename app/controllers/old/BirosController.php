<?php

class BirosController extends \BaseController {

	/**
	 * Display a listing of biros
	 *
	 * @return Response
	 */
	public function index()
	{
		$biros = Biro::paginate(10);

		return View::make('biros.index', compact('biros'));
	}

	/**
	 * Show the form for creating a new biro
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('biros.create');
	}

	/**
	 * Store a newly created biro in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Biro::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Biro::create($data);

		return Redirect::route('biros.index');
	}

	/**
	 * Display the specified biro.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$biro = Biro::findOrFail($id);

		return View::make('biros.show', compact('biro'));
	}

	/**
	 * Show the form for editing the specified biro.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$biro = Biro::find($id);

		return View::make('biros.edit', compact('biro'));
	}

	/**
	 * Update the specified biro in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$biro = Biro::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Biro::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$biro->update($data);

		return Redirect::route('biros.index');
	}

	/**
	 * Remove the specified biro from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Biro::destroy($id);

		return Redirect::route('biros.index');
	}

}
