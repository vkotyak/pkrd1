<?php
class View {
    function createStartPage($inData){
        $html ="<div>";
        $html .='<form action="" method="POST" name="startForm" id="startForm">
        <input name="currency" type="radio" value="USD">USD
        <input name="currency" type="radio" value="EUR">EUR
        <input type="submit" value="send data">
        </form>';
        $html .="</div>";
        return $html;
    }
    function createResultPage($inData) {
        $html = '<div id="result">';
        $html = '<h3>'.$inData['ccy'].'</h3>';
        $html .='cash: buy='.$inData['cash']['buy'].' sale='.$inData['cash']['sale'].'<br>';
        $html .='bank: buy='.$inData['bank']['buy'].' sale='.$inData['bank']['sale'].'<br>';
        $html .='</div>';
        $html .='</div>';
        return $html;
    }

    function viewPage($inData) {
        $title ='title of page';

        $html = '<html><head>';
        $html .= '<title>'.$title.'</title>';
        $html .= '</head><body>';
        $html .= $inData;
        $html .= '</body></html>';
        echo $html;
    }
}