var $ = require("jquery");


$(document).ready(function(){
    $(".note button").on("click", function(){
        $(".note").slideUp();
    });
})