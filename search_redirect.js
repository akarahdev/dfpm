function search() {
    console.log("Searching!");
    let value = document.getElementById("searchbox").value;
    window.location.href = `search.php?filter=${value}`
}

document.getElementById("form").onsubmit = (event) => {
    event.preventDefault();
    search()
    return false
};