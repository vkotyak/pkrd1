<?php

class Model {

    function StartPage() {
        $outData = "";
        return $outData;
    }
    function haveUserData($inData) {
        $outData = [];
        $outData['ccy'] = $inData;
        $outData['cash'] = [];
        $outData['bank'] = [];
        /*
        [
            {"ccy":"USD","base_ccy":"UAH","buy":"28.05000","sale":"28.45000"},
            {"ccy":"EUR","base_ccy":"UAH","buy":"33.10000","sale":"33.70000"},
            {"ccy":"RUR","base_ccy":"UAH","buy":"0.35500","sale":"0.38200"},
            {"ccy":"BTC","base_ccy":"USD","buy":"12159.7666","sale":"13439.7420"}
        ]
            */
        $url1 = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';
        $url2 = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=11';
        $json = file_get_contents($url1);
        $obj = json_decode($json);
        foreach($obj as $item) {
            if ( $item->ccy == $inData) {
                $outData['cash']['buy'] = $item->buy;
                $outData['cash']['sale'] = $item->sale;
            }
        }
        $json = file_get_contents($url2);
        $obj = json_decode($json);
        foreach($obj as $item) {
            if ( $item->ccy == $inData) {
                $outData['bank']['buy'] = $item->buy;
                $outData['bank']['sale'] = $item->sale;
            }
        }
        return $outData;
    }

}