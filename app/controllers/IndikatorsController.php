<?php

class IndikatorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /indikators
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /indikators/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('indikators.create');

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /indikators
	 *
	 * @return Response
	 */
	public function store()
	{
		$indikator = new Indikator;
		$indikator->indikator_kinerja=Input::get('indikator_kinerja');
		$indikator->target=Input::get('target');
		$indikator->waktu_penyelesaian=Input::get('waktu_penyelesaian');
		$indikator->keterangan=Input::get('keterangan');


		$indikator->save();
		return Redirect::to('tapkins/indikators');
	}

	/**
	 * Display the specified resource.
	 * GET /indikators/{id}
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
	 * GET /indikators/{id}/edit
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
	 * PUT /indikators/{id}
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
	 * DELETE /indikators/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}