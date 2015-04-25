<?php

class RktController extends \BaseController {

	/**
	 * Display a listing of rkts
	 *
	 * @return Response
	 */
	public function index()
	{
		$rkts = Rkt::all();

		return View::make('rkts.index', compact('rkts'));
	}

	/**
	 * Show the form for creating a new rkt
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('rkts.create');
	}

	/**
	 * Store a newly created rkt in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Rkt::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Rkt::create($data);

		return Redirect::route('rkts.index');
	}

	/**
	 * Display the specified rkt.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$rkt = Rkt::findOrFail($id);

		return View::make('rkts.show', compact('rkt'));
	}

	/**
	 * Show the form for editing the specified rkt.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$rkt = Rkt::find($id);

		return View::make('rkts.edit', compact('rkt'));
	}

	/**
	 * Update the specified rkt in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rkt = Rkt::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Rkt::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$rkt->update($data);

		return Redirect::route('rkts.index');
	}

	/**
	 * Remove the specified rkt from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Rkt::destroy($id);

		return Redirect::route('rkts.index');
	}

}
