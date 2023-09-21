<?php
$connect = mysqli_connect('localhost', 'root', '', 'MySite');
if (!$connect) {
    die('Ошибка');
}?>

<!DOCTYPE html>
<html>

<head>
    <title>日本のオタク! Добавить статью</title>
    <link rel="stylesheet" href="styles/article.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/add-article.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="scripts/checkAddFile.js"></script>
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
            <form action="create.php" method="POST" enctype="multipart/form-data">
                <label class="add-lable" for="article-name">Название статьи:</label>
                <div class="add-element">
                    <input name="articlename" class="add-input" type="text">
                </div>

                <br>
                <label>Аннотация статьи:</label>
                <div class="add-element">
                    <textarea name="articleannotation" class="add-input" type="text" rows="5"></textarea>
                </div>

                <br>
                <label>Текст статьи:</label>
                <div class="add-element">
                    <textarea name="articletextblock" class="add-input" type="text" rows="5"></textarea>
                </div>


                <br>
                <label>Теги:</label>
                <div class="add-element">
                    <select name="articletagsplace" type="text" class="search-select" size="8">
                        <optgroup label="Префектура:">
                            <option value="Токио(東京都)">Токио(東京都)</option>
                            <option value="Канагава(神奈川県)">Канагава(神奈川県)</option>
                            <option value="Осака(大阪府)">Осака(大阪府)</option>
                            <option value="Нара(奈良県)">Нара(奈良県)</option>
                        </optgroup>
                    </select>
                    <select name="articletagstime" type="text" class="search-select" size="8">
                        <optgroup label="Период:">
                            <option value="Гэнси(平安時代)">Гэнси(平安時代)</option>
                            <option value="Кодай(江戸時代)">Кодай(江戸時代)</option>
                            <option value="Гэндай(昭和時代)">Гэндай(昭和時代)</option>
                        </optgroup>
                    </select>
                </div>

                <br>
                <label class="add-lable" for="article-main-picture">Картинка статьи:</label>
                <input type="file" name="image" id="" required><br>
                <button name="upload">upload</button>


            </form>
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