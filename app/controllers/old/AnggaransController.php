<?php

class AnggaransController extends \BaseController {

	/**
	 * Display a listing of anggarans
	 *
	 * @return Response
	 */
	public function index()
	{
		$anggarans = Anggaran::all();

		return View::make('anggarans.index', compact('anggarans'));
	}

	/**
	 * Show the form for creating a new anggaran
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('anggarans.create');
	}

	/**
	 * Store a newly created anggaran in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Anggaran::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Anggaran::create($data);

		return Redirect::route('anggarans.index');
	}

	/**
	 * Display the specified anggaran.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$anggaran = Anggaran::findOrFail($id);

		return View::make('anggarans.show', compact('anggaran'));
	}

	/**
	 * Show the form for editing the specified anggaran.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$anggaran = Anggaran::find($id);

		return View::make('anggarans.edit', compact('anggaran'));
	}

	/**
	 * Update the specified anggaran in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$anggaran = Anggaran::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Anggaran::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$anggaran->update($data);

		return Redirect::route('anggarans.index');
	}

	/**
	 * Remove the specified anggaran from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Anggaran::destroy($id);

		return Redirect::route('anggarans.index');
	}

}
