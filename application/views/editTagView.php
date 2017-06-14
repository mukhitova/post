<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel = "stylesheet">
    <link href="css/style.css" rel = "stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>Posts</title>
</head>
<body>
<div class = "container">
<br />
<form action="../kohana/tags/savetag" method="post" accept-charset="utf-8">

    <label for="title">Id: </label>
    <input class="form-control"  type="text" name="id" value="<?= $post['id']?>">
    <br />
    <br />
    <label for="title">Title: </label>
    <input class="form-control"  type="text" name="title" value  = <?= $post['title']?>>
    <br />
    <br />
    <label for="title">Meta title: </label>
    <input class="form-control"  type="text" name="meta_title" value  = <?= $post['meta_title']?>>
    <br />
    <br />
    <label for="title">Meta description: </label>
    <input class="form-control" type="text" name="meta_description" value  = <?= $post['meta_description']?>>
    <br />
    <br />
    <label for="title">Meta keywords: </label>
    <input class="form-control"  type="text" name="meta_keywords" value  = <?= $post['meta_keywords']?>>
    <br />
    <br />
    <label for="title">Description: </label>
    <input class="form-control" type="text" name="description" value  = <?= $post['description']?>>
    <br />
    <br />
    <button class = 'btn btn-success' type="submit">Save</button>
    <button class = 'btn btn-danger' type="reset">Reset</button>
</form>
</div>
</body>
</html>