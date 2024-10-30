<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 10</title>
    <style>
        .footer-bs {
            background-color: #3c3d41;
            padding: 60px 40px;
            color: rgba(255, 255, 255, 1.00);
            border-bottom-right-radius: 6px;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 6px;
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }

        .footer-bs .footer-brand,
        .footer-bs .footer-nav,
        .footer-bs .footer-social,
        .footer-bs .footer-ns {
            padding: 10px 25px;
        }

        .footer-bs .footer-nav,
        .footer-bs .footer-social,
        .footer-bs .footer-ns {
            border-color: transparent;
        }

        .footer-bs .footer-brand h2 {
            margin: 0px 0px 10px;
        }

        .footer-bs .footer-brand p {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.70);
        }

        .footer-bs .footer-nav ul.pages {
            list-style: none;
            padding: 0px;
        }

        .footer-bs .footer-nav ul.pages li {
            padding: 5px 0px;
        }

        .footer-bs .footer-nav ul.pages a {
            color: rgba(255, 255, 255, 1.00);
            font-weight: bold;
            text-transform: uppercase;
        }

        .footer-bs .footer-nav ul.pages a:hover {
            color: rgba(255, 255, 255, 0.80);
            text-decoration: none;
        }

        .footer-bs .footer-nav h4 {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }

        .footer-bs .footer-nav ul.list {
            list-style: none;
            padding: 0px;
        }

        .footer-bs .footer-nav ul.list li {
            padding: 5px 0px;
        }

        .footer-bs .footer-nav ul.list a {
            color: rgba(255, 255, 255, 0.80);
        }

        .footer-bs .footer-nav ul.list a:hover {
            color: rgba(255, 255, 255, 0.60);
            text-decoration: none;
        }

        .footer-bs .footer-social ul {
            list-style: none;
            padding: 0px;
        }

        .footer-bs .footer-social h4 {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .footer-bs .footer-social li {
            padding: 5px 4px;
        }

        .footer-bs .footer-social a {
            color: rgba(255, 255, 255, 1.00);
        }

        .footer-bs .footer-social a:hover {
            color: rgba(255, 255, 255, 0.80);
            text-decoration: none;
        }

        .footer-bs .footer-ns h4 {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }

        .footer-bs .footer-ns p {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.70);
        }

        @media (min-width: 768px) {

            .footer-bs .footer-nav,
            .footer-bs .footer-social,
            .footer-bs .footer-ns {
                border-left: solid 1px rgba(255, 255, 255, 0.10);
            }
        }
    </style>
</head>

<body>
    <h1>Time in Riga</h1>
    <p>
        <?php
        date_default_timezone_set('Europe/Riga');
        echo date('Y-m-d H:i:s');
        ?>
    </p>
    <footer class="footer-bs">
        <div class="row">

            <div class="col-md-3 footer-brand animated fadeInLeft">
                <h2>Time in Riga</h2>
                <p>
                    <?php
                    date_default_timezone_set('Europe/Riga');
                    echo date('Y-m-d H:i:s');
                    ?>
                </p>
            </div>

            <div class="col-md-4 footer-nav animated fadeInUp">
                <h4>Меню</h4>
                <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Все для uCoz</a></li>
                        <li><a href="#">PSD Исходники</a></li>
                        <li><a href="#">CSS Элементы</a></li>
                        <li><a href="#">Разное</a></li>
                        <li><a href="#">Форум</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Карта сайта</a></li>
                        <li><a href="#">Карта Форума</a></li>
                        <li><a href="#">Реклама на сайта</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 footer-social animated fadeInDown">
                <h4>Соц.сети</h4>
                <ul>
                    <li><a href="#">ВКонтакте</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>

            <div class="col-md-3 footer-ns animated fadeInRight">
                <h4>Новостная рассылка</h4>
                <p>Подпишитесь на нашу новостную рассылку, чтоб не пропустить ничего важного!</p>
                <p>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Введите email...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span
                                class="glyphicon glyphicon-envelope"></span></button>
                    </span>
                </div>
                </p>
            </div>

        </div>
    </footer>
    </div>
    <!-- Footer -->
</body>

</html>
