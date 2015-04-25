<?php

class SasaransController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sasarans
	 *
	 * @return Response
	 */
	public function index()
	{
		$sasarans = Sasaran::all();
		return View::make('sasarans.index')
			->with('sasarans', $sasarans);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sasarans/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sasarans.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sasarans
	 *
	 * @return Response
	 */
	public function store()
	{
		$sasaran = new Sasaran;

		$sasaran->sasaran = Input::get('sasaran');
		$sasaran->deskripsi = Input::get('sasaran_desc');

		if ($sasaran->save()) {
			return Redirect::route('sasaran.index');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /sasarans/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sasaran = Sasaran::find($id);
		return View::make('sasarans.show')
			->with('sasaran', $sasaran);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sasarans/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sasaran = Sasaran::find($id);
		return View::make('sasarans.edit')
			->with('sasaran', $sasaran);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sasarans/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sasaran = Sasaran::find($id);

		$sasaran->sasaran = Input::get('sasaran');
		$sasaran->deskripsi = Input::get('sasaran_desc');

		if ($sasaran->save()) {
			return Redirect::route('sasaran.index');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sasarans/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sasaran = Sasaran::find($id);
		$sasaran->delete();
		return Redirect::route('sasaran.index');
	}

}