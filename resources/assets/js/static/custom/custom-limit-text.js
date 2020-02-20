$(".limit-me").text(function(index, currentText) {
    return currentText.substr(0, 255);
});