<?php

class SubkegiatanController extends \BaseController {

	/**
	 * Display a listing of subkegiatans
	 *
	 * @return Response
	 */
	public function index()
	{
		$subkegiatans = Subkegiatan::all();

		return View::make('subkegiatans.index', compact('subkegiatans'));
	}

	/**
	 * Show the form for creating a new subkegiatan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('subkegiatans.create');
	}

	/**
	 * Store a newly created subkegiatan in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Subkegiatan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Subkegiatan::create($data);

		return Redirect::route('subkegiatans.index');
	}

	/**
	 * Display the specified subkegiatan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$subkegiatan = Subkegiatan::findOrFail($id);

		return View::make('subkegiatans.show', compact('subkegiatan'));
	}

	/**
	 * Show the form for editing the specified subkegiatan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$subkegiatan = Subkegiatan::find($id);

		return View::make('subkegiatans.edit', compact('subkegiatan'));
	}

	/**
	 * Update the specified subkegiatan in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$subkegiatan = Subkegiatan::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Subkegiatan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$subkegiatan->update($data);

		return Redirect::route('subkegiatans.index');
	}

	/**
	 * Remove the specified subkegiatan from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Subkegiatan::destroy($id);

		return Redirect::route('subkegiatans.index');
	}

}
