<?php

class IndikatorController extends \BaseController {

	public function getRenstraJson($renstraId)
	{
		$indikator = Indikator::where('parent_id','=',$renstraId)
			->where('tipe','=','renstra')
			->get();

		return $indikator;
	}

}
