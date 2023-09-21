const loadPerClick = 3;
let loaded = 3;

function loadMore(){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (request.readyState != 4) return;
        if (request.status != 200) {
                alert('Ошибка запроса.');
        } else {
            displayArticles(JSON.parse(request.responseText));
        }
    }
    request.open('GET', './resources/articles.json', true);
    request.send();
}

function displayArticles(articles) {
    let htmlTags = "";
    let i = 0;
    for (article of articles) {
        if (article["id"] == loaded + i + 1 && i < loadPerClick) {
            i++;
            tags = "";
            for (tag of article["tags"]) {
                tags += `<a href="">${tag["name"]}</a>   `;
            }
            htmlTags += `
            <div class="article-in-list">
                <div class="row">
                    <img class="article-in-list-image" src="images/${article["image"]}">
                    <div>
                        <h2><a href="/article-${article["id"]}.html">${article["title"]}</a></h2>
                        <p>${article["annotation"]}</p>
                    </div>
                </div>
                <div>
                    <p>Теги: ${tags}</p>
                </div>
            </div>`
        }
    }
    loaded += i;
    const div = document.getElementById("article-list");
    div.innerHTML += htmlTags;
}