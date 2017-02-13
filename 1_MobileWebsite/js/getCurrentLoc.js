/**
 * Created by javad on 2/7/2017.
 */
$(document).ready(function () {
    var x = setTimeout(sendCurrentPos, 3000);
    function sendCurrentPos() {
        debugger;
        var myPos;
        $.ajax({
            type: "POST",
            url: 'DBModify.php',
            dataType: 'json',
            data: {"data":"check"},
            success: function(Loc){
                debugger;
                for (i in Loc) {
                    var markerLat = Loc[i].latitude;
                    var markerLng = Loc[i].longitude;
                    myPos = new google.maps.LatLng(markerLat,markerLng);
                }
                //alert (myPos);
                var marker = new google.maps.Marker({
                    position: myPos,
                    map: map
                });
                var infowindow = new google.maps.InfoWindow({
                    content: 'طول جغرافیایی: ' + myPos.lat() + '<br>عرض جغرافیایی: ' + myPos.lng()
                });
                infowindow.open(map,marker);
                //alert(Loc[0].latitude);
                //alert(Loc[0].longitude);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(textStatus + " :::: " + errorThrown);
            }
        });


    }

});