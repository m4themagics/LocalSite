let loadedParams = []

function loadTags(parentTagId, divName) {
    if (loadedParams.includes(divName)) {
        return;
    }
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (request.readyState != 4) return;
        if (request.status != 200) {
                alert('Невозможно выполнить запрос, обратитесь в поддержку!');
        } else {
            loadedParams.push(divName);
            displayTags(JSON.parse(request.responseText), parentTagId, divName);
        }
    }
    request.open('GET', './resources/tags.json', true);
    request.send();
}

function displayTags(tags, parentTagId, divName) {
    var htmlTags = ""
    for (tag of tags) {
        if (tag["parentTagId"] == parentTagId){
            htmlTags += `
            <label class="display-inline">
                <input type="checkbox" value="${tag["id"]}">${tag["name"]}
            </label>`
        }
    }
    const div = document.getElementById(divName);
    div.innerHTML = htmlTags;
}