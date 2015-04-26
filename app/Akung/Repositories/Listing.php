<?php namespace Akung\Repositories;

/**
* Repository
*/
class Listing
{
	public static $test = 10;
	
	public static function sasaran()
	{
		$sasaran = \Sasaran::all()->toArray();
		$listSasaran = [];
		foreach ($sasaran as $item) {
			$listSasaran[$item['id']] = $item['sasaran'];
		}

		return $listSasaran;
	}

	public static function biro()
	{
		$biros = \Biro::all()->toArray();
		$listBiro = [ 0 => '-Pilih Biro-'];
		foreach ($biros as $item) {
			$listBiro[$item['id']] = $item['nama'];
		}

		return $listBiro;
	}
}