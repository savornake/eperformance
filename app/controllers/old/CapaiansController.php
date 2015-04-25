<?php

class CapaiansController extends \BaseController {

	/**
	 * Display a listing of capaians
	 *
	 * @return Response
	 */
	public function index()
	{
		$capaians = Capaian::all();

		return View::make('capaians.index', compact('capaians'));
	}

	/**
	 * Show the form for creating a new capaian
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('capaians.create');
	}

	/**
	 * Store a newly created capaian in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Capaian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Capaian::create($data);

		return Redirect::route('capaians.index');
	}

	/**
	 * Display the specified capaian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$capaian = Capaian::findOrFail($id);

		return View::make('capaians.show', compact('capaian'));
	}

	/**
	 * Show the form for editing the specified capaian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$capaian = Capaian::find($id);

		return View::make('capaians.edit', compact('capaian'));
	}

	/**
	 * Update the specified capaian in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$capaian = Capaian::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Capaian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$capaian->update($data);

		return Redirect::route('capaians.index');
	}

	/**
	 * Remove the specified capaian from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Capaian::destroy($id);

		return Redirect::route('capaians.index');
	}

}
