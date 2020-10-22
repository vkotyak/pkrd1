<?php
$url1 = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=11';
        $json = file_get_contents($url1);
        $obj = json_decode($json);

print_r($obj);