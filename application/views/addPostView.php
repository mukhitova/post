<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel = "stylesheet">
    <link href="css/style.css" rel = "stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <title>Add post</title>
</head>

<body>
<div class = "container">
<br />
<br />
<form action="../kohana/posts/storepost" method="post" accept-charset="utf-8">
    <label for="title">Title: </label>
    <input required class="form-control" id="title" type="text" name="title" />
    <br />
    <br />
    <label for="meta_title">Meta_title: </label>
    <input required class="form-control" id="meta_title" type="text" name="meta_title" />
    <br />
    <br />
    <label for="meta_description">Meta_description: </label>
    <input required class="form-control" id="meta_description" type="text" name="meta_description" />
    <br />
    <br />
    <label for="meta_keywords">Meta_keywords:</label>
    <input required class="form-control" id="meta_keywords" type="text" name="meta_keywords" />
    <br />
    <br />
    <label for="image_url">Image_url:</label>
    <input required class="form-control" id="image_url" type="text" name="image_url" />
    <br />
    <br />
    <label for="description">Description:</label>
    <input required class="form-control" id="description" type="text" name="description" />
    <br />
    <br />
    <label for="text">Text:</label>
    <input required class="form-control" id="text" type="text" name="text" />
    <br />
    <br />
    <label for="user_id">User_id:</label>
    <input required class="form-control" id="user_id" type="text" name="user_id" />
    <br />
    <br />
    <button class = 'btn btn-success' type="submit">Send</button>
    <button class = 'btn btn-danger' type="reset">Reset</button>
</form>
</div>
</body>

</html>

