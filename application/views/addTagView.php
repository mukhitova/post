<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel = "stylesheet">
    <link href="css/style.css" rel = "stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>Add category</title>
</head>

<body>
<div class = "container">
<br />
<br />
<form action="../kohana/tags/storetag" method="post" accept-charset="utf-8">
    <label for="title">Title: </label>
    <input class="form-control"  id="title" type="text" name="title" />
    <br />
    <br />
    <label for="meta_title">Meta_title: </label>
    <input class="form-control"  id="meta_title" type="text" name="meta_title" />
    <br />
    <br />
    <label for="meta_description">Meta_description: </label>
    <input class="form-control"  id="meta_description" type="text" name="meta_description" />
    <br />
    <br />
    <label for="meta_keywords">Meta_keywords:</label>
    <input class="form-control"  id="meta_keywords" type="text" name="meta_keywords" />
    <br />
    <br />
    <label for="description">Description:</label>
    <input class="form-control"  id="description" type="text" name="description" />
    <br />
    <br />
    <button class = 'btn btn-success' type="submit">Send</button>
    <button class = 'btn btn-danger' type="reset">Reset</button>
</form>
</div>
</body>
</html>

