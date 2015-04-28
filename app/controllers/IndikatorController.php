<?php

class IndikatorController extends \BaseController {

	public function getRenstra($renstraId)
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

	public function deleteRenstra($renstraId, $indikatorId)
	{
		Indikator::destroy($indikatorId);

		//return Redirect::route('renstras.index');
		return [
			'status'	=> 'success'
		];
	}

	public function getTapkin($tapkinId)
	{
		$indikator = Indikator::where('parent_id','=',$tapkinId)
			->where('tipe','=','tapkin')
			->get();

		return $indikator;
	}

	public function postTapkin($tapkinId)
	{
		
		$indikator = new Indikator();

		$indikator->parent_id = $tapkinId;
		$indikator->tipe = 'tapkin';
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

	public function putTapkin($tapkinId, $indikatorId)
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

	public function deleteTapkin($tapkinId, $indikatorId)
	{
		Indikator::destroy($indikatorId);

		//return Redirect::route('tapkins.index');
		return [
			'status'	=> 'success'
		];
	}

	public function getRkt($rktId)
	{
		$indikator = Indikator::where('parent_id','=',$rktId)
			->where('tipe','=','rkt')
			->get();

		return $indikator;
	}

	public function postRkt($rktId)
	{
		
		$indikator = new Indikator();

		$indikator->parent_id = $rktId;
		$indikator->tipe = 'rkt';
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

	public function putRkt($rktId, $indikatorId)
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

	public function deleteRkt($rktId, $indikatorId)
	{
		Indikator::destroy($indikatorId);

		//return Redirect::route('rkts.index');
		return [
			'status'	=> 'success'
		];
	}

}
