
const xmlhttp = new XMLHttpRequest();

xmlhttp.onload = function () {
    const myObj = JSON.parse(this.responseText);
    let res = "";
    myObj.listeOfArticles.forEach(element => {
        res =
            '<div class="div-article">' +
            '<img id="image" src=' + element.image + ' />' +
            '<a href="'+element.url+'?id='+element.id+'"> ' + element.title + ' </a>' +
            '</div>' + res
    });
    document.getElementById("liste-of-articles").innerHTML = res;
}
xmlhttp.open("GET", "data/articles.json");
xmlhttp.send();
