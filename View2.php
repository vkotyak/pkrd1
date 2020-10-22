<?php
class View {
    function createStartPage($inData){
        $html ='<div class="row">';
        $html .='<div class="col s12"><h1>Currency courses from PrivatBank<h1></div>';
        $html .='<form class="col s12" action="" method="POST" name="startForm" id="startForm">
        <label><input name="currency" type="radio" value="USD"><span>USD</span></label>
        <label><input name="currency" type="radio" value="EUR"><span>EUR</span></label>
        <button class="btn waves-effect waves-light" type="submit" value="send data">
        <i class="material-icons right">send</i> Send</button>
        </form>';
        $html .="</div>";
        return $html;
    }
    function createResultPage($inData) {
        $html = '<div id="result" class="row"><div class="col s12">';
        $html .= '<h3>'.$inData['ccy'].'</h3>';
        $html .='cash: buy='.$inData['cash']['buy'].' sale='.$inData['cash']['sale'].'<br>';
        $html .='bank: buy='.$inData['bank']['buy'].' sale='.$inData['bank']['sale'].'<br>';
        $html .='</div>';
        $html .='</div></div>';
        return $html;
    }

    function viewPage($inData) {
        $title ='title of page';

        $html = '<html><head>';
        $html .='<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">';
        $html .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
        $html .= '<title>'.$title.'</title>';
        $html .= '</head><body>';
        $html .='<nav>
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right">
            <li><a href="#">Home</a></li>
          </ul>
        </div>
      </nav><div class="container">';
        $html .= $inData;
        $html .= '</div>
        <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
            <p>some text...</p>
            </div>
            <div class="col l6 s12">
            <p>some text...</p>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
      </footer>';
      $html .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>';
      $html .='</body></html>';
        echo $html;
    }
}