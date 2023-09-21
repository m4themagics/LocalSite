<!DOCTYPE html>
<html>

<head>
    <title>日本のオタク! Главная страница.</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <a href="index.php"><img src="images/header.png" width="100%"></a>
        <nav class="nav-buttons">
            <button class="nav-button" onclick="location.href='news.php'">
                <h2>Главная страница</h2>
            </button>
            <button class="nav-button" onclick="location.href='articles.php'">
                <h2>Статьи о Японии</h2>
            </button>
            <button class="nav-button" onclick="location.href='gallery.php'">
                <h2>Фотографии пользователей<h2>
            </button>
        </nav>
    </header>
    <main>

        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>

        <div class="popular-articles-div">
            <p><a href="article-2.php">
                    <h3>Город Нара (остров Хонсю)</h3>
                </a></p>
            <p><a href="article-1.php">
                    <h3>Небесное дерево (Токио)</h3>
                </a></p>
        </div>

        <div class="main-div">

            <div class="carousel-of-articles">
                <div id="carousel">
                    <div class="article-in-carousel fade">
                        <img class="carousel-image" src="images/kitsune2.jpg">
                        <h2><a href="/article-3.php">Храм Фусими-инари</a></h2>
                    </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094</a>
                <a class="next" onclick="plusSlides(1)">&#10095</a>
            </div>


            <div class="article-in-list">
                <div class="row">
                    <img class="article-in-list-image" src="images/addari.jpg">
                    <div>
                        <h2><a href="/add-article.php">Добавьте свою собственную статью!</a></h2>
                        <p>Большинство статей для вас уже известная информация? Хочется поделиться своим опытом?
                            Воспользуйтесь возможностью опубликовать свою собственную статью на нашем сайте!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-div">
            <p>Cайт находится в разработке, будьте терпеливы!(„• ᴗ •„)"</p>
            <img class="article-image" src="images/kimono.png">
        </div>

        <div class="btn-up btn-up_hide"></div>
    </main>
    <script src="scripts/addauthor.js"></script>
    <script src="scripts/scrollBar.js"></script>
    <script src="scripts/pgUp.js"></script>
    <script src="/scripts/carousel.js"></script>

    <footer class="center-element">
        <div>
            <p>Спасибо за проявленный интерес!! ٩(◕‿◕)۶"</p>
            <a href="contacts.php">Контакты</a>
        </div>
    </footer>
</body>

</html>