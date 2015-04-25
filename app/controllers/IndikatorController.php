<?php

class IndikatorController extends \BaseController {

	/**
	 * Display a listing of indikators
	 *
	 * @return Response
	 */
	public function index()
	{
		$indikators = Indikator::all();

		return View::make('indikators.index', compact('indikators'));
	}

	/**
	 * Show the form for creating a new indikator
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('indikators.create');
	}

	/**
	 * Store a newly created indikator in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Indikator::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Indikator::create($data);

		return Redirect::route('indikators.index');
	}

	/**
	 * Display the specified indikator.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$indikator = Indikator::findOrFail($id);

		return View::make('indikators.show', compact('indikator'));
	}

	/**
	 * Show the form for editing the specified indikator.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$indikator = Indikator::find($id);

		return View::make('indikators.edit', compact('indikator'));
	}

	/**
	 * Update the specified indikator in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$indikator = Indikator::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Indikator::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$indikator->update($data);

		return Redirect::route('indikators.index');
	}

	/**
	 * Remove the specified indikator from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Indikator::destroy($id);

		return Redirect::route('indikators.index');
	}

}
