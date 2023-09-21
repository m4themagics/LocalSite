<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>日本のオタク! Приветствие</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <img src="images/header.png" width="100%">
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
        <marquee behaviour="alternate"><span>Добро пожаловать! На этой странице вы можете найти все, что вас интересует!
                ☆*:.｡.o(≧▽≦)o.｡.:*☆</span></marquee>
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
            <div class="article-in-list">
                <div class="row">
                    <img class="article-image" src="images/prototype.jpg">
                    <div>
                        <h2><a href="article-1.php">Небесное дерево</a></h2>
                        <p>Небесное дерево Токио – вторая по высоте телебашня в мире.
                            Это изящное архитектурное строение из стекла, бетона и металла взметнулось ввысь,
                            благодаря стараниям опытных конструкторов и инженеров.
                        </p>
                    </div>
                </div>
            </div>

            <div class="article-in-list">
                <div class="row">
                    <img class="article-image" src="images/minokawa.jpg">
                    <div>
                        <h2><a href="article-2.php">Город Нара</a></h2>
                        <p>
                        <h3>Нара или Город Оленей</h3>
                        Около 1600 оленей свободно разгуливают по улицам прекрасного города.
                        Говорят, что первый император Японии спустился с небес на оленьей упряжке. В 6-7 веках город
                        Нара был первой столицей страны.
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

    <footer class="center-element">
        <div>
            <p>Спасибо за проявленный интерес!! ٩(◕‿◕)۶"</p>
            <a href="contacts.php">Контакты</a>
        </div>
    </footer>

</body>

</html>