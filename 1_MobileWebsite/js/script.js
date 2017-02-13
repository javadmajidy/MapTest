$(document).ready(function () {
    // SelectArea Ends
    $(".JWelcomeButton button .notGetLocation").click(function () {

        window.open("registerLocation.html", '_self');
    });

    var x = document.getElementById("getLocation");

    $("button").click(function () {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    });

    function showPosition(position) {
        $.ajax({
            url: "DBModify.php",
            type: "post",
            data: { longitude: position.coords.longitude, latitude: position.coords.latitude } ,
            success: function (response) {
                // you will get response from your php page (what you echo or print)
                alert(response);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(textStatus + " :::: " + errorThrown);
            }


        });
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                x.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "An unknown error occurred."
                break;
        }
    }

});