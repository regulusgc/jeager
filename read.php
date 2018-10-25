<?php
header("Access-Control-Allow-Origin: *");

require("Db.class.php");
$db = new DB();

$sql = $db->query("SELECT * FROM tb_peliculas");

if (true){
echo json_encode($sql);
}
else{
    echo json_encode("0 result");

}

?>