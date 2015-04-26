<?php

use Akung\Repositories\Listing;

class RktController extends \BaseController {

	/**
	 * Display a listing of rkts
	 *
	 * @return Response
	 */
	public function index()
	{
		$rkts = Rkt::all();

		return View::make('rkts.index', compact('rkts'))
			->with('biro', Listing::biro());
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
			return [
				'status'	=> 'fail',
				'messages'	=> $validator
			];
		}

		if(Rkt::create($data))
		{
			return [
				'status'	=> 'success'
			];
		} 
		else 
		{
			return [
				'status'	=> 'fail'
			];
		}
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
			return [
				'status'	=> 'fail',
				'messages'	=> $validator
			];
		}

		if($rkt->update($data))
		{
			return [
				'status'	=> 'success'
			];
		} 
		else 
		{
			return [
				'status'	=> 'fail'
			];
		}
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

		return [
			'status'	=> 'success'
		];
	}

	/**
	 * Display json 
	 * @return [type]
	 */
	public function postJson()
	{
		$tapkins = Rkt::with('biro')->get();

		$holder = [];
		
		$tapkinArray = $tapkins->toArray();
		for ($i = 0; $i < count($tapkinArray); $i++) {
			foreach ($tapkinArray[$i] as $key => $value) {
				//dd(count($value));
				if (count($value) == 1) {
					$holder[$i][$key] = $value;
				} elseif (count($value) > 1) {
					# code...
					foreach ($value as $k => $v) {
						$holder[$i][$key . '-' . $k] = $v;
					}
				} 
			}
		}

		return Response::json($holder);
	}

}
