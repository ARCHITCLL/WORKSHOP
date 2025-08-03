document.addEventListener("DOMContentLoaded", function () {
    loadSection("menu.html", "menu");
    loadSection("content.html", "content");
    loadSection("footer.html", "footer");
});

function loadSection(file, elementId) {
    fetch(file)
        .then(response => response.text())
        .then(data => {
            document.getElementById(elementId).innerHTML = data;
        })
        .catch(error => {
            document.getElementById(elementId).innerHTML = "Error loading section";
            console.error("Error: ", error);
        });
}


function loadContent(filename) {
    loadSection(filename, "content");
}
