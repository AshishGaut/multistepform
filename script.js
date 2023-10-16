var formSections = [document.getElementById("step1"), document.getElementById("step2"), document.getElementById("step3"), document.getElementById("step4")];
var nextButtons = [document.getElementById("Next1"), document.getElementById("Next2"), document.getElementById("Next3")];
var backButtons = [document.getElementById("Back1"), document.getElementById("Back2"), document.getElementById("Back3")];
var progress = document.getElementById("form-progress");

var currentSection = 0;

function showSection(sectionIndex) {
    formSections[currentSection].style.left = "-450px";
    formSections[sectionIndex].style.left = "40px";
    progress.style.width = 25 + sectionIndex * 25 + "%";
    currentSection = sectionIndex;
}

nextButtons.forEach(function (button, index) {
    button.onclick = function () {
        showSection(currentSection + 1);
    };
});

backButtons.forEach(function (button, index) {
    button.onclick = function () {
        showSection(currentSection - 1);
    };
});
