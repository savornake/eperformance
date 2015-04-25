<?php

class RincianController extends \BaseController {

	/**
	 * Display a listing of rincians
	 *
	 * @return Response
	 */
	public function index()
	{
		$rincians = Rincian::all();

		return View::make('rincians.index', compact('rincians'));
	}

	/**
	 * Show the form for creating a new rincian
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('rincians.create');
	}

	/**
	 * Store a newly created rincian in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Rincian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Rincian::create($data);

		return Redirect::route('rincians.index');
	}

	/**
	 * Display the specified rincian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$rincian = Rincian::findOrFail($id);

		return View::make('rincians.show', compact('rincian'));
	}

	/**
	 * Show the form for editing the specified rincian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$rincian = Rincian::find($id);

		return View::make('rincians.edit', compact('rincian'));
	}

	/**
	 * Update the specified rincian in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rincian = Rincian::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Rincian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$rincian->update($data);

		return Redirect::route('rincians.index');
	}

	/**
	 * Remove the specified rincian from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Rincian::destroy($id);

		return Redirect::route('rincians.index');
	}

}
