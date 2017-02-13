$(document).ready(function () {
    var map;
    Showmap(13);
    function Showmap(mapZoomLevel) {
        $mapType = $(".sectionAddressShowButtonContainer select").val();
        var mapOptions = {
            center: new google.maps.LatLng(34.63956365697355, 50.87502479553223),
            zoom: mapZoomLevel,
            disableDefaultUI: true,
            overviewMapControl: true,
            mapTypeId: ($mapType == "ROADMAP") ? google.maps.MapTypeId.ROADMAP : ($mapType == "SATELLITE") ? google.maps.MapTypeId.SATELLITE : ($mapType == "HYBRID") ? google.maps.MapTypeId.HYBRID : google.maps.MapTypeId.TERRAIN
        };
        map = new google.maps.Map(document.getElementById("map133"), mapOptions);
    }
    $(".sectionAddressShowButtonContainer button").click(function () {
        Showmap(map.getZoom());
    });
    // SelectArea Starts
    $(".select-style").click(function () {
        $(this).toggleClass("UArrow");
    });
    $(document).click(function(evt){
        if($(evt.target).parent("div").hasClass("select-style")) {
            return;
        }
        $(".select-style").removeClass("UArrow");
    });
    // SelectArea Ends
});