<?php
class View {
    function createStartPage($inData){
        $html ="<div>";
        $html .='<form action="" method="POST" name="startForm" id="startForm">
        <input type="text" name="textField" id="textField">
        <input type="submit" value="send data">
        </form>';
        $html .="</div>";
        return $html;
    }
    function createResultPage($inData) {
        $html = '<p>User input: '.$inData.'</p>';
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