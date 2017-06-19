<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="content/css/bootstrap.css" rel = "stylesheet">
    <link href="content/css/style.css" rel = "stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="content/js/bootstrap.js"></script>
    <script src="content/js/main.js"></script>
    <title>Posts</title>

</head>



<body>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="d-block img-fluid" src="content/img/1.jpg" alt="First slide">
                </div>

                <div class="item">
                    <img class="d-block img-fluid" src="content/img/3.jpg" alt="First slide">
                </div>

                <div class="item">
                    <img class="d-block img-fluid" src="content/img/2.jpg" alt="First slide">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <?php foreach ($blog_posts as $post){?>
                        <div class="col-sm-6" >
                            <div class="thumbnail"><img src="<?=  $post['image_url'] ?>" alt="">
                                <div class="caption">
                                    <h4> <?php echo $post['title'] ?></h4>
                                    <p><?php
                                        $string = $post['description'];
                                        if(strlen($string) > 100) $string = substr($string, 0, 100).'...';
                                        echo $string;
                                        ?></p>

                                    <?php
                                    echo "<td><a href='/kohana/posts/eachpost?id={$post['id']}' class='btn btn-success'>More</a></td>";
                                    ?>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                    </div>
                    <?php echo $pagination;  ?>
                </div>


                <div class="col-sm-4">

                    <h5 align="center">Новые</h5>
                    <?php foreach ($newposts as $newpost){?>

                        <div  class="col-sm-12" >
                            <div class="thumbnail"><img src="<?=  $newpost['image_url'] ?>" alt="">
                                <div class="caption">
                                    <h4> <?php echo $newpost['title'] ?></h4>
                                    <p><?php
                                        $string = $newpost['description'];
                                        if(strlen($string) > 100) $string = substr($string, 0, 100).'...';
                                        echo $string;
                                        ?></p>

                                    <?php
                                    echo "<td><a href='/kohana/posts/eachpost?id={$newpost['id']}' class='btn btn-success'>More</a></td>";
                                    ?>
                                </div>
                            </div>
                            </br>
                        </div>

                    <?php } ?>


                    <h5 align="center">pop</h5>
                    <div class="row">
                        <?php foreach ($count as $countIds){?>
                            <div class="col-sm-12" >
                                <div class="thumbnail"><img src="<?=  $countIds['image_url'] ?>" alt="">
                                    <div class="caption">
                                        <h4> <?php echo $countIds['title'] ?></h4>
                                        <p><?php
                                            $string = $countIds['description'];
                                            if(strlen($string) > 100) $string = substr($string, 0, 100).'...';
                                            echo $string;
                                            ?></p>

                                        <?php
                                        echo "<td><a href='/kohana/posts/eachpost?id={$countIds['id']}' class='btn btn-success'>More</a></td>";
                                        ?>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                </div>
                </div>

            </div>


        </div>
</body>
</html>