<?php

class RKTsController extends \BaseController {

	/**
	 * Display a listing of rkts
	 *
	 * @return Response
	 */
	public function index()
	{
		$rkts = RKT::all();

/*		return View::make('rkts.index', compact('rkts'));
*/

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

		return View::make('rkts.index')
			->with('list_sasaran', $listSasaran)
			->with('sasarans', $sasarans);

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
		$indikator = new Indikator;
		$indikator->sasaran_id = Input::get('sasaran_id');
		$indikator->indikator_kinerja = Input::get('indikator_kinerja');
		$indikator->target = Input::get('target');
		$indikator->waktu_penyelesaian = Input::get('waktu_penyelesaian');
		$indikator->keterangan = Input::get('keterangan');



		$indikator->save();

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
