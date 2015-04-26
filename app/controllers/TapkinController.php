<?php
//use Akung\Repositories\Easyui;
use Akung\Repositories\Listing;


class TapkinController extends \BaseController {

	/**
	 * Display a listing of tapkins
	 *
	 * @return Response
	 */
	public function index()
	{
		$tapkins = Tapkin::all();

		return View::make('tapkins.index', compact('tapkins'))
			->with('biro', Listing::biro());
	}

	/**
	 * Show the form for creating a new tapkin
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tapkins.create');
	}

	/**
	 * Store a newly created tapkin in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Tapkin::$rules);

		if ($validator->fails())
		{
			return [
				'status'	=> 'fail',
				'messages'	=> $validator
			];
		}

		if(Tapkin::create($data))
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
	 * Display the specified tapkin.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tapkin = Tapkin::findOrFail($id);

		return View::make('tapkins.show', compact('tapkin'));
	}

	/**
	 * Show the form for editing the specified tapkin.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tapkin = Tapkin::find($id);

		return View::make('tapkins.edit', compact('tapkin'));
	}

	/**
	 * Update the specified tapkin in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tapkin = Tapkin::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Tapkin::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$tapkin->update($data);

		return Redirect::route('tapkins.index');
	}

	/**
	 * Remove the specified tapkin from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Tapkin::destroy($id);

		return Redirect::route('tapkins.index');
	}

	/**
	 * Display json 
	 * @return [type]
	 */
	public function postJson()
	{
		$tapkins = Tapkin::with('biro')->get();

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
