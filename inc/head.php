Andy Hunt - Design / Illustration / Web Development</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/font-awesome-animation.min.css">
    <link href="https://fonts.googleapis.com/css?family=Khula:300,400,600" rel="stylesheet">
    <script src="https://use.fontawesome.com/2221812539.js"></script>
    <link rel="shortcut icon" type="image/ico" href="/img/favicon.png" />


    <link rel="image_src" href="images/AHD_photo.jpg" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@andyhunt">
    <meta name="twitter:title" content="www.andyhuntdesigns.com">
    <meta name="twitter:description" content="The portfolio of web designer & illustrator Andy Hunt.">
    <meta name="twitter:image" content="http://www.andyhuntdesigns.com/img/slide_welcome.jpg">
    <meta property="og:title"              content="Andy Hunt. Damn fine design." />
    <meta property="og:description"        content="The portfolio of web designer & illustrator Andy Hunt." />

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
        var map;
        var hillsborough = new google.maps.LatLng(36.0664109, -79.0986014); //Coordinates
        //var chapelhill = new google.maps.LatLng(35.9131, -79.0561); //Coordinates
        
        function HomeControl(controlDiv, map) {
        
          // Setup the click event listeners: simply set the map to
          // chapelhill
          google.maps.event.addDomListener(controlUI, 'click', function() {
            map.setCenter(chapelhill)
          });
        
        }
        
        function initialize() {
          var mapDiv = document.getElementById('map_canvas');
          var myOptions = {
            zoom: 12,
            center: hillsborough,
            disableDefaultUI: true, // Disable ALL UI Elements
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          map = new google.maps.Map(mapDiv, myOptions);
        }
    </script>

  </head>


  <body>

  <a class="animated-hover faa-parent" id="trigger-overlay"><i class="fa fa-bars faa-pulse"></i></a>