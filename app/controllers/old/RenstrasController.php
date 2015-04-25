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
		$renstra->tujuan=Input::get('tujuan');
		$renstra->sasaran_strategis=Input::get('sasaran_strategis');
		$renstra->indikator=Input::get('indikator');
		$renstra->program_kegiatan=Input::get('program_kegiatan');
		$renstra->sub_kegiatan=Input::get('sub_kegiatan');
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
        $renstra = Renstra::find($id);

        // show the edit form and pass the nerd
        return View::make('renstras.edit')
            ->with('renstra', $renstra);
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
		
            // store
            $renstra = Renstra::find($id);
            $renstra->tujuan=Input::get('tujuan');
			$renstra->sasaran_strategis=Input::get('sasaran_strategis');
			$renstra->indikator=Input::get('indikator');
			$renstra->program_kegiatan=Input::get('program_kegiatan');
			$renstra->sub_kegiatan=Input::get('sub_kegiatan');
			$renstra->save();

            // redirect
            Session::flash('message', 'Successfully updated renstra!');
            return Redirect::to('renstras');
        

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
	
		$renstra = renstra::find($id);
        $renstra->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('renstras');
	}

}