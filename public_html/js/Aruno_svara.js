let pictureNumber = 0;
let pictureName = "img/AR_";
$("#left").click(function () {
    if (pictureNumber > 1) {
        pictureNumber--;
        $(".resize").attr("src", "img/AR_" + pictureNumber + ".jpeg");
    }
})
$("#right").click(function () {
    if (pictureNumber < 13) {
        pictureNumber++;
        $(".resize").attr("src", "img/AR_" + pictureNumber + ".jpeg");
    }
})
