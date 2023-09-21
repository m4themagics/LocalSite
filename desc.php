<?php
$connect = mysqli_connect('localhost', 'root', '', 'MySite');

$product_id = $_GET['aname'];
$product = mysqli_query($connect, "SELECT * FROM `Items` WHERE `aname`='$product_id'");
$product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html>

<head>
    <title>日本のオタク!</title>
    <link rel="stylesheet" href="styles/article.css">
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

        <div class="article-div">
            <h1><?= $product['aname'] ?></h1>
            <img class="article-image" src='images/<?= $product['apic'] ?>' >
            <h2><?= $product['aannotation'] ?></h2>
            <p><?= $product['atext'] ?></p>
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