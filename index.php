<!doctype html>
<html>
<head>
    <title>Polltergeist v0.0.2</title>
    <link rel = "favicon" href = "media/ghost.ico" />
    <link rel = "stylesheet" href = "style.css" />
</head>
<body>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDSvUw9ttw-5Cf-21JIUfRDUIIInr8StuY&sensor=false"></script>
    <script type = "text/javascript" language = "JavaScript">
        <!--
        var map;
        var marker;
        var mapOptions = {};
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();

        google.maps.event.addDomListener(window, 'load', initialize);

        // initialize fields
        var track = document.getElementById("track");
        var address = document.getElementById("speechInput");
        var mapCanvas = document.getElementById("mapCanvas");
        var mapDirs = document.getElementById("mapDirs");
        var details = document.getElementById("details");

        say.addEventListener("click", connection.write);
        speechInput.addEventListener("keypress", function() {if (event.keyCode == 13) connection.write();});
        //-->
    </script>

    <h1>Polltergeist v0.0.2</h1>
    <p>What is your address?</p>
    <form id = "findmp" action = "index.php" method = "post">
        <input id = "address" name = "address" size = "30" type = "text"></input>
        <input type = "submit" id = "track" value = "Track Them"></input>
    </form>

<?php
    $address = $_POST['address'];
    echo "This is the postal code we got: " . exec('./postal $address');
?>
    <div id = "map" style = "width: 886px; height: 490px; background-image: url('media/BlankMap.png')">
    </div>

<div class = "floatover member selected" id = "irene"></div>
<div class = "floatover member" id = "baey"></div>
<div class = "floatover member" id = "masagos"></div>
<div class = "floatover member" id = "mah"></div>
<div class = "floatover member" id = "heng"></div>

<div class = "floatover updates">
    <div class = "twitter">
    </div>
    <div class = "facebook">
    </div>
    <div class = "stfeed">
    </div>
</div>

<!--

<a class="twitter-timeline" 
	href="https://twitter.com/YamKeng" 
	data-widget-id="533573553442926594" 
	width="292" height="470">Tweets by @YamKeng</a> 
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like-box" data-href="https://www.facebook.com/BaeyYamKeng" data-width="292" data-height="470" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
-->

</body>
</html>

