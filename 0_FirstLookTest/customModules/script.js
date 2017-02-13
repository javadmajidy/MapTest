
$(document).ready(function () {
    $(".select-style").click(function () {
        $(this).toggleClass("UArrow");
    });
    $(document).click(function(evt){
        if($(evt.target).parent("div").hasClass("select-style")) {
            return;
        }
        $(".select-style").removeClass("UArrow");
    });
});