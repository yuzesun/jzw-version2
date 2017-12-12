$("#zipCode").change(function () {
    if (this.value.length !== 5) {
        document.getElementById("hideCity").style.display = "none";
        document.getElementById("hideState").style.display = "none";
    } else {
        document.getElementById("hideCity").style.display = "block";
        document.getElementById("hideState").style.display = "block";
    }
});
