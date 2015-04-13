<?php

class TapkinsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tapkins
	 *
	 * @return Response
	 */
	public function index()
	{
/*		$tapkins=Tapkin::all();
*/		return View::make('tapkins.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tapkins/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tapkins.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tapkins
	 *
	 * @return Response
	 */
	public function store()
	{
		$sasaran = new Sasaran;
		$sasaran->sasaran_strategis=Input::get('sasaran_strategis');
		$sasaran->save();
		return Redirect::to('tapkins');
	}

	/**
	 * Display the specified resource.
	 * GET /tapkins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tapkins/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /tapkins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /tapkins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}