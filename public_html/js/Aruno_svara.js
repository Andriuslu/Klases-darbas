let pictureNumber = 0;
let pictureName = "img/AR_";
$(".left_arrow").click(function () {
    if (pictureNumber > 1) {
        pictureNumber--;
        $(".resize").attr("src", "img/AR_" + pictureNumber + ".jpeg");
    }
})
$(".right_arrow").click(function () {
    if (pictureNumber < 13) {
        pictureNumber++;
        $(".resize").attr("src", "img/AR_" + pictureNumber + ".jpeg");
    }
})