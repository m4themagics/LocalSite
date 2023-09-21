<?php
$connect = mysqli_connect('localhost', 'root', '', 'MySite');
if (!$connect) {
    die('Ошибка');
}
$Items = mysqli_query($connect, "SELECT * FROM `Items`");
$Items = mysqli_fetch_array($Items);

?>

<!DOCTYPE html>
<html>

<head>
    <title>日本のオタク! Статьи.</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <a href="/index.php"><img src="images/header.png" width="100%"></a>
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
            <div id="article-list">
                <div class="article-in-list">
                    <div class="row">
                        <img class="article-in-list-image" src="images/minokawa.jpg">
                        <div>
                            <h2><a href="article-2.php">Город Нара (остров Хонсю, префектура Нара)‌</a></h2>
                            <p>
                                Около 1600 оленей свободно разгуливают по улицам прекрасного города.
                                Говорят, что первый император Японии спустился с небес на оленьей упряжке
                            </p>
                        </div>
                    </div>
                    <div>
                        <p>Теги: Канагава(神奈川県)</p>
                    </div>
                </div>

                <?php
                $products = mysqli_query($connect, "SELECT * FROM `Items`");
                $products = mysqli_fetch_all($products);
                foreach ($products as $product) {
                    ?>
                    <div class="article-in-list">
                        <div class="row">
                            <img class="article-image" src='images/<?= $product[3] ?>'>
                            <div>
                                <h2><a href="desc.php?aname=<?= $product[0] ?>"><?= $product[0] ?></a></h2>
                                <p>
                                    <?= $product[1] ?>
                                </p>
                            </div>
                        </div>

                        <div>
                            <p>Теги: <?= $product[4] ?> <?= $product[5] ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>


            <div class="center-element">
                <button class="nav-button margin-5" onclick="loadMore()">Загрузить дальше</button>
            </div>
        </div>


        <div class="search-div">
            <form action="sorting.php" method="get">
                <p>Все теги</p>
                <a class="parent-tag" onclick="loadTags(1, 'brand-tags')">Префектура</a>
                <div id="brand-tags"></div>
                <a class="parent-tag" onclick="loadTags(2, 'age-tags')">Период</a>
                <div id="age-tags"></div>
            </form>
            <button class="button-search" type="submit">Поиск</button>
            <div class="btn-up btn-up_hide"></div>

    </main>
    <footer class="center-element">
        <div>
            <p>Спасибо за проявленный интерес!! ٩(◕‿◕)۶"</p>
            <a href="contacts.php">Контакты</a>
        </div>
    </footer>

    <script src="/scripts/tags.js"></script>
    <script src="/scripts/loadMoreArticles.js"></script>
    <script src="scripts/scrollBar.js"></script>
    <script src="scripts/pgUp.js"></script>
</body>

</html>