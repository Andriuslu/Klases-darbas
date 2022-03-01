let pictureNumber = 1;
let pictureName = "img/AR_";
$("#left").click(function () {
    if (pictureNumber > 1) {
        pictureNumber--;
        $(".resize").attr("src", pictureName + pictureNumber + ".jpeg");
    }
})
$("#right").click(function () {
    if (pictureNumber < 13) {
        pictureNumber++;
        $(".resize").attr("src", pictureName + pictureNumber + ".jpeg");
    }
})
