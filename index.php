<?php
include('top.php');
?>
 <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quick Design</title>

        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="../js/jquery.flexslider.js"></script>

        <script type="text/javascript">
            var flexsliderStylesLocation = "../css/flexslider.css";
            $('<link rel="stylesheet" type="text/css" href="'+flexsliderStylesLocation+'" >').appendTo("head");
            $(window).load(function() {

                $('.flexslider').flexslider({
                    animation: "fade",
                    slideshowSpeed: 3000,
                    animationSpeed: 1000
                });

            });
        </script>

    </head>
    <body class="main">
        <!-- Place somewhere in the <body> of your page -->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="../image/purpose.png" alt="picture of purpose of the website" >
                </li>
                <li>
                    <img src="../image/about.png" alt="picture of about the website"  >
                </li>

                <li>
                    <img src="../image/tips.png" alt="picture of tips." >
                </li>


            </ul>
        </div>




<?php
include('footer.php');
?>
    </body>
</html>
