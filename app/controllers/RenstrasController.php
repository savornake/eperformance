<?php

class RenstrasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /renstras
	 *
	 * @return Response
	 */
	public function index()
	{
		$renstras=Renstra::all();
		return View::make('renstras.index',array ('renstras'=>$renstras));
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /renstras/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('renstras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /renstras
	 *
	 * @return Response
	 */
	public function store()
	{
		// dd(Input::all());
		$renstra = new Renstra;
		$renstra->rencana_strategis=Input::get('rencana_strategis');
		$renstra->rencana_kegiatan=Input::get('rencana_kegiatan');
		$renstra->indikator=Input::get('indikator');
		$renstra->realisasi=Input::get('realisasi');
		$renstra->uraian=Input::get('uraian');
		$renstra->save();
		return Redirect::to('renstras');
	}

	/**
	 * Display the specified resource.
	 * GET /renstras/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('renstras.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /renstras/{id}/edit
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
	 * PUT /renstras/{id}
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
	 * DELETE /renstras/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}