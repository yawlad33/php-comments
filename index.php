<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row header">
				<div class="col-md-9">
					<p>
                    Телефон: (499)340-94-71
                    </p>
                    <p>
                        Email: <span id="info-email">info@future-group.ru</span>
                    </p>
					<h3>
						Комментарии
					</h3>
				</div>
				<div class="col-md-2 logo">
					<img alt="Bootstrap Image Preview" src="img/logo.png" >
				</div>

                <div class="col-md-1"></div>
			</div>
            <div class="body">
			<div class="row">
				<div class="col-md-12">
					<p>
                        <?php

                        $q = new SplQueue();
                        $page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
                        $mysqli = new mysqli("localhost", "root", "root", "db");// Подключается к базе данных
                        $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы

                        while ($row = $result_set->fetch_assoc()) {
                            $content = "<p class='comment_name'>" . $row['name'] .  "   <span id='time'>" . $row['time'] ."</span> </p>" .
                           "<p class='comment_text'>" . $row['text_comment'] . "</p><br />";

                            $q->push($content);

              }
                       for($i=0;$i<3;$i++)
                            echo $q->pop();

                        ?>
                    </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>
                        Оставить комментарий
					</h3>
					<form role="form" name="comment" action="comment.php" method="post">
						<div class="form-group">
							 
							<label for="username">
                                Ваше имя
							</label>
                            <div class="col">
                                <input type="text" class="form-control" id="username" placeholder="" name="name">
                            </div>
                        </div>

						<div class="form-group">

                            <label for="exampleFormControlTextarea1">Ваш комментарий</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text_comment"></textarea>
						</div>
                        <p>
                        <input type="hidden" name="page_id" value="150" />
                        <button type="submit" class="btn btn-primary btn_form">
							Отправить
						</button>
                        </p>
					</form>
				</div>
			</div>
            </div>

			<div class="row footer">
				<div class="col-md-2 footer_logo">
					<img alt="Bootstrap Image Preview" src="img/logo.png">
				</div>
				<div class="col-md-10 footer_text">
					<p>
                        Телефон: (499)340-94-71
					</p>
                    <p>
                        Email: info@future-group.ru
                    </p>
                    <p>
                        Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1
                    </p>
                    <p>
                        © 2010-2014 Future. Все права защищены
                    </p>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>