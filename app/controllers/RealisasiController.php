<?php

class RealisasiController extends \BaseController {

	/**
	 * Display a listing of realisasis
	 *
	 * @return Response
	 */
	public function index()
	{
		$realisasis = Realisasi::all();

		return View::make('realisasis.index', compact('realisasis'));
	}

	/**
	 * Show the form for creating a new realisasi
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('realisasis.create');
	}

	/**
	 * Store a newly created realisasi in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Realisasi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Realisasi::create($data);

		return Redirect::route('realisasis.index');
	}

	/**
	 * Display the specified realisasi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$realisasi = Realisasi::findOrFail($id);

		return View::make('realisasis.show', compact('realisasi'));
	}

	/**
	 * Show the form for editing the specified realisasi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$realisasi = Realisasi::find($id);

		return View::make('realisasis.edit', compact('realisasi'));
	}

	/**
	 * Update the specified realisasi in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$realisasi = Realisasi::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Realisasi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$realisasi->update($data);

		return Redirect::route('realisasis.index');
	}

	/**
	 * Remove the specified realisasi from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Realisasi::destroy($id);

		return Redirect::route('realisasis.index');
	}

}
