<?php
//=-=-=-=-=-=-=-=-=-=-=-=-=-|^_^|=-=-=-=-=-=-=-=-=-=-=-=-=-=-//

//						-Tapsiriq-

//=-=-=-=-=-=-=-=-=-=-=-=-=-|^_^|=-=-=-=-=-=-=-=-=-=-=-=-=-=-//

//1
// $records = [

// [ 'id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe' ],

// [ 'id' => 3245,'first_name' => 'Sally', 'last_name' => 'Smith' ],

// [ 'id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones' ],

// [ 'id' => 5623, 'first_name' => 'Peter', 'last_name' => 'Doe' ]

// ];

// $first_names = array_column($records,'first_name');
// $last_names= array_column($records, 'last_name');
// print_r($first_names);
// echo "<br>";
//result: Array ( [0] => John [1] => Sally [2] => Jane [3] => Peter ) 

// print_r($last_names);
// echo "<br>";
//result: Array ( [0] => Doe [1] => Smith [2] => Jones [3] => Doe ) 

//cvb B olacaq cunki array_coloumn() icerisinde verilmis ikinci parametre esasen misal ucun first_name yeni bir array emele getirir.


//=-=-=-=-=-=-=-=-=-=-=-=-=-|^_^|=-=-=-=-=-=-=-=-=-=-=-=-=-=-//


//2
//array_map funksiyasi
//array_map funksiyasina aid numune;
// function square($x)
// {
// 	return ($x*$x);
// }
// $numbers=array(1,3,5,8,13);
// $squareResult=array_map("square",$numbers); //qeyd: funksiya adi ilk yazilir, " " daxilinde yazilmalidir.
// print_r($squareResult);
//result: Array ( [0] => 1 [1] => 9 [2] => 25 [3] => 64 [4] => 169 ) 
//====//
//numune2:
// echo "<br>";
// function numune2($a){
// 	if($a=="Kapitan"){
// 		return "Xosgelmisen!";
// 	}
// 	else {
// 		return "Bagisla ama biz seni gozlemirdik";
// 	}
// }
// $peshe=["icraBashcisi", "Prezident","Kapitan","Dervish"];
// $gozlenenSahis=array_map("numune2",$peshe);
// print_r($gozlenenSahis);
// echo "<br>";	
//result: Array ( [0] => Bagisla ama biz seni gozlemirik [1] => Bagisla ama biz seni gozlemirik [2] => Xosgelmisen! [3] => Bagisla ama biz seni gozlemirik ) 


//numuneye esasen array_map array  icerisindeki deyerleri funksiya icerisine oturur. yeni bir nov parametr oturur.


//=-=-=-=-=-=-=-=-=-=-=-=-=-|^_^|=-=-=-=-=-=-=-=-=-=-=-=-=-=-//


//3
//$word-un uzunlugunu tapmaq:
// $word = "Code Academy 2016";
// $length=strlen($word);
// print_r($length);

//result: 17

//=-=-=-=-=-=-=-=-=-=-=-=-=-|^_^|=-=-=-=-=-=-=-=-=-=-=-=-=-=-//

//4 
$numbers=[21,13,5,3,8,34,1];

//artan sirada
// sort($numbers);

// $nlength = count($numbers);
// for($x = 0; $x < $nlength; $x++) {
//     echo $numbers[$x];
//     echo "<br>";
// }


//azalan sirada
rsort($numbers);
$slength= count($numbers);
for ($i=0; $i < $slength ; $i++) { 
	echo $numbers[$i];
	echo "<br>";
}



//=-=-=-=-=-=-=-=-=-=-=-=-=-|^_^|=-=-=-=-=-=-=-=-=-=-=-=-=-=-//

//5
//array_walk ve array_map ile.

?>