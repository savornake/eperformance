<?php

class IndikatorController extends \BaseController {

	public function getRenstraJson($renstraId)
	{
		$indikator = Indikator::where('parent_id','=',$renstraId)
			->where('tipe','=','renstra')
			->get();

		return $indikator;
	}

	public function postRenstra($renstraId)
	{
		
		$indikator = new Indikator();

		$indikator->parent_id = $renstraId;
		$indikator->tipe = 'renstra';
		$indikator->indikator_kinerja = Input::get('indikator_kinerja');
		$indikator->target = Input::get('target');
		$indikator->waktu = Input::get('waktu');
		$indikator->kegiatan = Input::get('kegiatan');

		if($indikator->save()) 
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

	public function putRenstra($renstraId, $indikatorId)
	{
		$indikator = Indikator::find($indikatorId);

		$indikator->indikator_kinerja = Input::get('indikator_kinerja');
		$indikator->target = Input::get('target');
		$indikator->waktu = Input::get('waktu');
		$indikator->kegiatan = Input::get('kegiatan');

		if($indikator->save()) 
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

}
