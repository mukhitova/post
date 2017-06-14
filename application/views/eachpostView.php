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
                        <div class="col-sm-12" >
                            <div class="thumbnail"><img src="<?=  $post['image_url'] ?>" alt="">
                                <div class="caption">
                                    <h4> <?php echo $post['title']; ?></h4>
                                    <p><?php echo $post['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>



<br><br>

        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

                <div class="panel panel-white post panel-shadow">
                    <div class="post-heading">
                        <div class="pull-left image">
                            <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">
                            <div class="title h5">
                                <a href="#"><b>Karlygash</b></a>
                                made a post.
                            </div>
                            <h6 class="text-muted time">1 minute ago</h6>
                        </div>
                    </div>
                    <div class="post-description">
                        <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
                        <div class="stats">
                            <a href="#" class="btn btn-default stat-item">
                                <i class="fa fa-thumbs-up icon"></i>2
                            </a>
                            <a href="#" class="btn btn-default stat-item">
                                <i class="fa fa-share icon"></i>12
                            </a>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="input-group">
                            <input class="form-control" placeholder="Add a comment" type="text">
                            <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
                    </span>
                        </div>
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">5 minutes ago</h5>
                                    </div>
                                    <p>Sure, oooooooooooooooohhhhhhhhhhhhhhhh</p>
                                </div>
                                <ul class="comments-list">
                                    <li class="comment">
                                        <a class="pull-left" href="#">
                                            <img class="avatar" src="http://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                        </a>
                                        <div class="comment-body">
                                            <div class="comment-heading">
                                                <h4 class="user">Ryan Haywood</h4>
                                                <h5 class="time">3 minutes ago</h5>
                                            </div>
                                            <p>Relax my friend</p>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <a class="pull-left" href="#">
                                            <img class="avatar" src="http://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                        </a>
                                        <div class="comment-body">
                                            <div class="comment-heading">
                                                <h4 class="user">Gavino Free</h4>
                                                <h5 class="time">3 minutes ago</h5>
                                            </div>
                                            <p>Ok, cool.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                <div style ="background-color: lavender;" class="col-sm-4">
                </div>
            </div>

        </div>


</body>

</html>