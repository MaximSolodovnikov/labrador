<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <!-- My style -->
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">

            <!-- TOP-MENU -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topmenu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#"><img src="images/logo.png" alt="logosite"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="topmenu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">Главная</a></li>
                            <li><a href="">Новости</a></li>
                            <li><a href="">Наши собаки</a></li>
                            <li><a href="">Щенки</a></li>
                            <li><a href="">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END TOP-MENU -->
            
            <div class="row" id="slider">
                <div class="col-lg-12">
                    <img class="img-responsive" src="images/goods/1.jpg" alt="">
                </div>
            </div>
            
            <div class="row" id="content">
                <div class="col-lg-12">
                    <h1>Jumbotron</h1>
                        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <p><a class="btn btn-primary btn-lg">Learn more</a></p>
                </div>
            </div>

            <div class="row" id="footer">
                <div class="col-lg-12">
                    
                    <!-- BOTTOM-MENU -->
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bot_menu">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="#"><img src="images/logo.png" alt="logosite"></a>
                            </div>

                            <div class="collapse navbar-collapse" id="bot_menu">
                                <ul class="nav navbar-nav navbar-left">
                                    <li class="bottom-items"><a href="">Главная</a></li>
                                    <li><a href="">Новости</a></li>
                                    <li><a href="">Наши собаки</a></li>
                                    <li><a href="">Щенки</a></li>
                                    <li><a href="">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- END BOTTOM-MENU -->
                    
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
    </body>
</html>