<?php
$array = ['€', 'http://example.com/some/cool/page', '337'];
$bad = json_encode($array);
$good = json_encode($array, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
// $bad would be ["\u20ac","http:\/\/example.com\/some\/cool\/page","337"]
// $good would be ["€","http://example.com/some/cool/page",337]
$dati = file_get_contents('data.json');
$datiuse = json_decode($dati, true);
var_dump($_POST['string']);
if (isset($_POST['string'])) {

}
// var_dump($dati);
// var_dump($datiuse);

echo json_encode($datiuse);