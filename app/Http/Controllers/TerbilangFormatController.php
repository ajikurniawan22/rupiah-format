<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;

class TerbilangFormatController extends Controller
{
    public function convert(Request $request)
    {
        $angka = $request->angka;
        $format = "Rupiah";
        $formatrupiah = Helper::formatrupiah($angka);
        $terbilang = Helper::terbilang($angka).$format;
        return response([
            'Output'=> $formatrupiah,
            'Terbilang' => $terbilang,
        ]);
    }
}
