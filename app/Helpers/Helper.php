<?php


namespace App\Helpers;
use Request;

class Helper
{
    
    public static function terbilang($angka) {
        if (!is_numeric($angka)) {
            return false;
        }
        $angka=abs($angka);
        $baca =array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");    
        $terbilang="";
         if ($angka < 12){
             $terbilang= " " . $baca[$angka];
         }
         else if ($angka < 20){
             $terbilang= Self::terbilang($angka - 10) . " belas";
         }
         else if ($angka < 100){
             $terbilang= Self::terbilang($angka / 10) . " puluh" . Self::terbilang($angka % 10);
         }
         else if ($angka < 200){
             $terbilang= " seratus" . Self::terbilang($angka - 100);
         }
         else if ($angka < 1000){
             $terbilang= Self::terbilang($angka / 100) . " ratus" . Self::terbilang($angka % 100);
         }
         else if ($angka < 2000){
             $terbilang= " seribu" . Self::terbilang($angka - 1000);
         }
         else if ($angka < 1000000){
             $terbilang= Self::terbilang($angka / 1000) . " ribu" . Self::terbilang($angka % 1000);
         }
         else if ($angka < 1000000000){
            $terbilang= Self::terbilang($angka / 1000000) . " juta" . Self::terbilang($angka % 1000000);
         }
            return $terbilang;
     }

     public static function formatrupiah($angka)
     {
        if(!is_numeric($angka)){
            return false;
        }
        $hasil_rupiah = "Rp.". number_format($angka,0,',',',');
        return $hasil_rupiah;
     }
 
}


