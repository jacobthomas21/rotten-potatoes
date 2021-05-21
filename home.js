

window.addEventListener("load", function(){

$(document).ready(function(){
    $("#login").submit(function(e){
        e.preventDefault();
        var password =$("#password").val();
        var username =$("#username").val();

        if (username == ""){
            $("#username").addClass("error");
        }
        if (password == ""){
            $("password").addClass("error");
        }


    });


});


});
