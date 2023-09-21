<!DOCTYPE html>
<html>

<head>
    <title>日本のオタク! Фотографии.</title>
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
                <h2>Фотографии пользователей</h2>
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
            <div class="carousel-wrapper">
                <span id="item-1"></span>
                <span id="item-2"></span>
                <span id="item-3"></span>
                <div class="carousel-item item-1">
                    <h2>東京スカイツリ</h2>
                    <a class="arrow arrow-prev" href="#item-3"></a>
                    <img class="article-image" src="images/prototype.jpg">
                    <a class="arrow arrow-next" href="#item-2"></a>
                </div>

                <div class="carousel-item item-2">
                    <h2>伏見稲荷大社</h2>
                    <p>Храмовый комплекс и главный храм богини Инари/</p>
                    <a class="arrow arrow-prev" href="#item-1"></a>
                    <img class="article-image" src="images/kitsune4.jpg">
                    <a class="arrow arrow-next" href="#item-3"></a>
                </div>

                <div class="carousel-item item-3">
                    <h2>奈良県</h2>
                    <p>Столица одноименной префектуры Японии</p>
                    <a class="arrow arrow-prev" href="#item-2"></a>
                    <img class="article-image" src="images/minokawa.jpg">
                    <a class="arrow arrow-next" href="#item-1"></a>
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

    <footer class="center-element">
        <div>
            <p>Спасибо за проявленный интерес!! ٩(◕‿◕)۶"</p>
            <a href="contacts.php">Контакты</a>
        </div>
    </footer>
</body>

</html>