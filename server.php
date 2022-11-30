<?php
$array = ['€', 'http://example.com/some/cool/page', '337'];
$bad = json_encode($array);
$good = json_encode($array, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
// $bad would be ["\u20ac","http:\/\/example.com\/some\/cool\/page","337"]
// $good would be ["€","http://example.com/some/cool/page",337]
$dati = file_get_contents('data.json');
$datiuse = json_decode($dati, true);
var_dump($_POST);
if (isset($_POST)) {
    $userTask = [
        'text' => $_POST['userTask'],
        'done' => 'false'
    ];
    $dati = json_decode($dati, true);
    $dati[] = $userTask;
    var_dump($dati);
    file_put_contents('data.json', json_encode($dati));

}
// var_dump($dati);
// var_dump($datiuse);

echo json_encode($datiuse);