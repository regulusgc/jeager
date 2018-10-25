<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, Content-Type");


require("Db.class.php");
$db = new DB();
$rest_json = file_get_contents("php://input");
$_POST =json_decode($rest_json,true);
$def ="default";
$des =$_POST["descripcion"];
$clas =$_POST["clasificacion"];
$sin = $_POST["sinopsis"];
$ac = $_POST["actores"];
$fecha = $_POST["fecha"];




$insert   =  $db->query("INSERT INTO tb_peliculas(idtb_peliculas, descripcion, clasificacion, sinopsis, actores, fechaproduccion) 
VALUES(:f,:d,:cla,:si,:act,:fec)",
    array("f"=>"$def","d"=>"$des","cla"=>"$clas","si"=>"$sin","act"=>"$ac","fec"=>"$fecha"));

if (true){
    $outp ="Insertaste ".$des ." ".$clas." ". $sin ." ". $ac." ".$fecha;
    echo json_encode($outp);
}
else{
    echo json_encode("Error la cagaste ");

}