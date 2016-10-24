<?php
$stringteks = file_get_contents('./file/1.txt'); //mengambil string dari dokumen file teks
$konversi = strtolower($stringteks); //mengubah huruf besar menjadi kecil
$jenistandabaca = array(',', '!', '?', '.', ':',';', '-');
$hapustandabaca = str_replace($jenistandabaca,'',$konversi);
$hapustandabaca = trim(preg_replace('/[^0-9a-z]+/i','', $konversi)); //menghilangkan semua tanda baca
$hapustandabaca = preg_replace('/[^a-z\d]+/i', '', $konversi);
$hapustandabaca = preg_replace('/[^\w]+/','',$konversi);
$hapustandabaca = preg_replace('/\W+/','',$konversi);
$replacespasi = str_replace(" ", PHP_EOL, $konversi);
$konversistring = explode("/", $konversi); //konversi string ke array
$array = preg_split('/[\pZ\pC]+/u', $konversi);
$ubahkarakter = str_replace(" ", '<br/>', $konversi);
  //cek ada spasi apa tidak
if(strpos($konversi,' ') >  0)
{ 
	echo "ada spasi";
}
else
{
	echo "tidak ada spasi";
}
$handle = fopen('./simpantoken/simpantoken.txt', 'w');
fwrite($handle, $replacespasi);
fclose($handle);
?>