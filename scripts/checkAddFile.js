let count = 2;

function addTextArea() {
    console.log(count);
    let parent = document.getElementById("add-form");

    let label = document.createElement("label");
    label.textContent = "Введите текст";
    label.className = "add-lable";
    label.setAttribute("for", "article-textblock-" + count);
    parent.appendChild(label);

    let div = document.createElement("div");
    div.className = "add-element";
    div.id = "add-element-textarea-" + count;
    parent.appendChild(div);

    let input = document.createElement("textarea");
    input.className = "add-input";
    input.id = "article-textblock-" + count;
    input.setAttribute("rows", "5");
    div.appendChild(input);

    count++;
}

function checkForm() {
    const articleName = document.getElementById("article-name");
    if (articleName.value == "") {
        alert("Название статьи не должно быть пустым");
        return;
    } 

    const articleMainPicture = document.getElementById("article-main-picture");
    if (!articleMainPicture.value) {
        alert("Картинка не может быть пустой");
        return;
    }
    let articleMainPictureExtension = articleMainPicture.value.split('.').pop();
    articleMainPictureExtension = articleMainPictureExtension.toLowerCase();
    if (articleMainPictureExtension != "jpg" && articleMainPictureExtension != "png" && articleMainPictureExtension != "jpeg") {
        alert("Картинка должна быть формата jpg, jpeg или png");
        return;
    }
    const image = new Image();
    image.onload = function() {
        if (this.width > 2000 || this.hight > 2000 || this.width < 400 || this.hight < 400) {
            alert("Размеры картинки не должны быть меньше 400 и больше 2000 пикселей");
            return;
        }
    }

    const articleAnnotation = document.getElementById("article-annotation");
    if (articleAnnotation.value.length < 10 || articleAnnotation.value.length > 300) {
        alert("Аннотация статьи не должна быть пустой, быть меньше 10 и больше 50 символов");
        return;
    }

    const articleTextblock = document.getElementById("article-textblock-1");
    console.log(articleTextblock)
    if (articleTextblock.value == "" || articleTextblock.value.length < 50) {
        alert("Текст статьи не может быть пустым или быть меньше 200 символов");
        return;
    }

    const articleTags = document.getElementById("article-tags");

     let selected = [];
    for (let option of articleTags.options)
    {
        if (option.selected) {
            selected.push(option.value);
        }
    }
    if (selected.length == 0) {
        alert("Нельзя создать статью без тегов");
        return;
    } 

    const articleAuthor = document.getElementById("article-author");
    if (articleAuthor.value == "" || !/^[A-Za-zА-Яа-я- ]+$/.test(articleAuthor.value)) {
        alert("Необходимо корректно вписать автора статьи");
        return;
    }
}