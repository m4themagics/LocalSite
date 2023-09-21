let slideIndex = 1;
let curSlidesLength = 1;
let maxSlidesLength = 4;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex);
}

function showSlides(n) {
  let slides1 = document.getElementsByClassName("article-in-carousel");
    if (n > slides1.length && maxSlidesLength > slides1.length) {
        loadMore();
    }
    if (n < 1 && maxSlidesLength > slides1.length) {
        loadMore();
    }

    let slides = document.getElementsByClassName("article-in-carousel");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

function loadMore(){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (request.readyState != 4) return;
        if (request.status != 200) {
                alert('Ошибка!');
        } else {
            displayArticles(JSON.parse(request.responseText));
        }
    }
    request.open('GET', './resources/articles.json', true);
    request.send();
}

function displayArticles(articles) {
    let htmlTags = "";
    for (article of articles) {
        if (article["id"] == curSlidesLength + 3) {
            htmlTags += `
            <div class="article-in-carousel fade" style="display: none;">
                <img class="carousel-image" src="images/${article["image"]}">
                <h2><a href="/article-${article["id"]}.html">${article["title"]}</a></h2>
            </div>`
        }
    }
    curSlidesLength++;
    const div = document.getElementById("carousel");
    div.innerHTML += htmlTags;
}
