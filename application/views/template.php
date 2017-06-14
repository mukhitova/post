<?php defined('SYSPATH') or die('No direct script access.');

?><!DOCTYPE html>
<html>
    <title><?php echo isset($title) ? $title :  'Admin panel'  ?></title>

    <!-- Base URL -->
    <base href="<?php echo URL::base(true, false) ?>">


    <!-- System -->
    <meta name="name" content="<?php echo isset($name) ? $name : '' ?>" />



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    </head>

    <body>
    <div class = "container">

        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Chocotravel</a>
           <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >-->
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?php echo URL::site('/posts')?>"> Posts </a>
                <a class="nav-item nav-link" href="<?php echo URL::site('/categories')?>"> Categories </a>
                <a class="nav-item nav-link" href="<?php echo URL::site('/tags')?>"> Tags </a>
                <a class="nav-item nav-link" href="<?php echo URL::site('/site')?>"> Main</a>
            <!-- </div>-->


        </nav>

        <?php echo isset($content) ? $content : '' ?>



</body>


    <link href="content/css/style.css" rel = "stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</br></br>
    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> Подписаться </h3>
                        <ul>
                            <li>
                                <div class="input-append newsletter-box text-center">
                                    <input type="text" class="full text-center" placeholder="Email ">
                                    <button class="btn  bg-gray" type="button"> Subscribe <i class="fa fa-long-arrow-right"> </i> </button>
                                </div>
                            </li>
                        </ul>
                        <ul class="social">
                            <li> <a href="https://www.facebook.com/Chocotravelcom-1552191661686110/"> <i class=" fa fa-facebook">   </i> </a> </li>
                            <li> <a href="https://twitter.com/chocotravel?lang=ru"> <i class="fa fa-twitter">   </i> </a> </li>
                            <li> <a href="https://plus.google.com/101887338349262997948"> <i class="fa fa-google-plus">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                        </ul>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.footer-->

        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> Copyright © GK. All right reserved. </p>
                <div class="pull-right">
                    <ul class="nav nav-pills payments">
                        <li><i class="fa fa-cc-visa"></i></li>
                        <li><i class="fa fa-cc-mastercard"></i></li>
                        <li><i class="fa fa-cc-amex"></i></li>
                        <li><i class="fa fa-cc-paypal"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.footer-bottom-->
    </footer>
    </div>

</html>
