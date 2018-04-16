<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Tender;


class ExcelController extends Controller
{
    

    public function downloadExcel($type)
	{
		$data = Tender::get()->toArray();
		return Excel::create('atskaite_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
}
