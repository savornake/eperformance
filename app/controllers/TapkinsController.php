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
		$sasarans = Sasaran::with('indikator')->take(10)->get();

		foreach ($sasarans as $sasaran) {

			foreach ($sasaran->indikator as $indikator) {
			//	dd($indikator->waktu_penyelesaian);
			}
		}

		$sasaran = Sasaran::all()->toArray();
		$listSasaran = [];
		foreach ($sasaran as $item) {
			$listSasaran[$item['id']] = $item['sasaran'];
		}

		return View::make('tapkins.index')
			->with('list_sasaran', $listSasaran)
			->with('sasarans', $sasarans);

	/*	

		return View::make('tapkins.index')
			->with('list_sasaran', $listSasaran)
			->with('sasaran', $sasaranAll);*/
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
		$indikator = new Indikator;
		$indikator->sasaran_id = Input::get('sasaran_id');
		$indikator->indikator_kinerja = Input::get('indikator_kinerja');
		$indikator->target = Input::get('target');
		$indikator->waktu_penyelesaian = Input::get('waktu_penyelesaian');
		$indikator->keterangan = Input::get('keterangan');



		$indikator->save();

		return Redirect::route('penetapan-kinerja.index');
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
		$indikator = indikator::find($id);
		return View::make('Indikator.edit')
			->with('indikator', $indikator);
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
		$indikator = Indikator::find($id);

		$indikator->sasaran_id = Input::get('sasaran_id');
		$indikator->indikator_kinerja = Input::get('indikator_kinerja');
		$indikator->target = Input::get('target');
		$indikator->waktu_penyelesaian = Input::get('waktu_penyelesaian');
		$indikator->keterangan = Input::get('keterangan');

		if ($indikator->save()) {
			return Redirect::route('penetapan-kinerja.index');

	}
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
		
	}

}