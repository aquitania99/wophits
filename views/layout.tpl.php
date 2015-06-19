<!DOCTYPE html>
<html lang="en">
<head>
    <title>.:: WopHits ::.</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body cz-shortcut-listen="true">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="container">
                <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                   <span class="sr-only">WopHits</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
                 <!--<a class="navbar-brand active">Wop-Hits <span class="glyphicon glyphicon-equalizer"></span></a>-->
               </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!--<li class="active"><a href="/">Home <span class="glyphicon glyphicon-home"></span></a></li>-->
                        <li class="active"><a href="/">Wop-Hits <span class="glyphicon glyphicon-equalizer"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <?= $tpl_content; ?>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>