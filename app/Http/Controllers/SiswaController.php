<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class SiswaController extends Controller
{
    public function data()
	{
		//menampilkan data barang secara keseluruhan melalui model
		$a = siswa::all();
		return view('table',compact('a'));
	}
}
