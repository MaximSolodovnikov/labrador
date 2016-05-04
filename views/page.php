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
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="">Новости</a></li>
                            <li><a href="">Наши собаки</a></li>
                            <li><a href="">Щенки</a></li>
                            <li><a href="">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END TOP-MENU -->
            
            <div class="row" id="content">
				<div class="col-lg-12">
					<div id="articles">
						<div class="col-lg-9">
							<a href="page.php" class="title_of_article">ОД через габариты</a>
						</div>
						<div class="col-lg-3">
							<p class="date_of_article">Дата: 30-04-2016</p><br>
						</div>
						
							<img src="images/news/1.jpeg" alt="" class="preview_img_of_article">
							<div class="text_of_article">
								Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний. Багато програм верстування та веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum з'явились за минулі роки.
								Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний. Багато програм верстування та веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема, жартівливі).							
							</div><br>	
						
						<div class="row">
							<div class="col-lg-3">
								<img src="images/news/1.jpeg" alt="" class="img-responsive img_of_article">
							</div>
							<div class="col-lg-3">
								<img src="images/news/1.jpeg" alt="" class="img-responsive img_of_article">
							</div>
							<div class="col-lg-3">
								<img src="images/news/1.jpeg" alt="" class="img-responsive img_of_article">
							</div>
							<div class="col-lg-3">
								<img src="images/news/1.jpeg" alt="" class="img-responsive img_of_article">
							</div>
						</div>
					</div><br>
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