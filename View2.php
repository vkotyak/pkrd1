<?php
class View {
    function createStartPage($inData){
        $html ='<div class="row">
        <div class="col s12"><h1>Currency courses from PrivatBank<h1></div>
        <form class="col s12" action="" method="POST" name="startForm" id="startForm">
        <label><input name="currency" type="radio" value="USD"><span>USD</span></label>
        <label><input name="currency" type="radio" value="EUR"><span>EUR</span></label>
        <button class="btn waves-effect waves-light" type="submit" value="send data">
        <i class="material-icons right">send</i> Send</button>
        </form>
        </div>';
        return $html;
    }
    function createResultPage($inData) {
        $html = '<div id="result" class="row"><div class="col s12">';
        $html .= '<h3>'.$inData['ccy'].'</h3>';
        $html .='<p>cash: buy='.$inData['cash']['buy'].' sale='.$inData['cash']['sale'].'</p>';
        $html .='<p>bank: buy='.$inData['bank']['buy'].' sale='.$inData['bank']['sale'].'</p>';
        $html .='</div>';
        $html .='</div></div>';
        return $html;
    }

    function viewPage($inData) {
        $title ='title of page';
        $html = '<html><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
        $html .= '<title>'.$title.'</title>';
        $html .= '</head><body>
        <nav>
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
        © 2020 Copyleft Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      </body></html>';
        echo $html;
    }
}