let headerSuccess = 'Success';
let headerNo = 'Oh no!';
let msgSuccess = 'We have sent a confirmation to your e-mail for verification';
let msgNo = 'Oops! Something went wrong you should try again';
let btnSuccess = 'OK';
let btnNo = 'Try again';
let isHeaderSuccess = true;
$("#icon").attr("src", "../img/thumbs-up_1f44d.png");
$("#hdr").html(headerSuccess);
$("#msg").html(msgSuccess);
$("#btn").html(btnSuccess).click(function () {
    if(isHeaderSuccess === true){
        $("#hdr").html(headerNo);
        $("#msg").html(msgNo);
        $("#icon").attr("src", "../img/x.jpeg")
            .width("100px").height("100px")
            .css("opacity", 0.1)
            .animate({"width": "50px", "height": "50px", "opacity": 1});
        $("#btn").html(btnNo);
        isHeaderSuccess = false;
    } else {
        $("#hdr").html(headerSuccess);
        $("#msg").html(msgSuccess);
        $("#icon").attr("src", "../img/thumbs-up_1f44d.png")
            .width("100px").height("100px")
            .css("opacity", 0.1)
            .animate({"width": "50px", "height": "50px", "opacity": 1});
        $("#btn").html(btnSuccess);
        isHeaderSuccess = true;
    }
});





