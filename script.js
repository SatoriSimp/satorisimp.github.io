function turnBlindMode() {
    var checkBox = document.getElementById("blindmode"),
        blindImg = document.getElementById("blackImg");

    if (checkBox.checked)
    {
          blindImg.style.display = "flex";
    }
    else blindImg.style.display = "none";
}

function submitForm() {
    var data = document.querySelector("");
    alert("Form submitted successfully!");
}