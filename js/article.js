function loadArticle() {

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const xmlhttp = new XMLHttpRequest();
    const id = urlParams.get('id')

    xmlhttp.onload = function () {
        const myObj = JSON.parse(this.responseText);
        let res = myObj.listeOfArticles.filter(e => e.id == id);

            document.getElementById("display-article").innerHTML =
                "<h1 id='titre'> " + res[0].title + "</h1>" +
                "<img id='image' src='" + res[0].image + "' />" 
             
     

    }
    xmlhttp.open("GET", "../data/articles.json");
    xmlhttp.send();
}