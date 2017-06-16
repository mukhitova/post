<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="content/css/bootstrap.css" rel = "stylesheet">
    <link href="content/css/style.css" rel = "stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="content/js/main.js"></script>
    <title>Posts</title>
</head>
<body>
<div class = "container">
<?php
echo "<table class='table table-hover'>
<tr>
<th>Id</th>
<th>Title</th>
<th>Meta title</th>
<th>Meta description</th>
<th>Meta keyword</th>
<th>Image url</th>
<th>Description</th>
<th>Text</th>
<th>User Id</th>
<th>Delete</th>
<th>Edit</th>
</tr>";

foreach ($blog_posts as $post) {

    echo "<tr>";
    echo "<td>" . $post['id']. "</td>";
    echo "<td>" . $post['title']. "</td>";
    echo "<td>" . $post['meta_title']. "</td>";
    echo "<td>" . $post['meta_description']. "</td>";
    echo "<td>" . $post['meta_keywords']. "</td>";
    echo "<td>" . $post['image_url']. "</td>";
    echo "<td>" . $post['description']. "</td>";
    echo "<td>" . $post['text']. "</td>";
    echo "<td>" . $post['user_id']. "</td>";

    //delete post
    echo "<td><form action='/kohana/posts/deletepost' method='post'>";
    echo "<input type='hidden' value='". $post['id'] ."' name='id' />";
    echo "<button class='btn btn-success'>Delete</button>";
    echo "</form></td>";

    //edit post
    echo "<td><a href='/kohana/posts/editpost?id={$post['id']}' class='btn btn-success'>Edit</a></td>";

    echo "</tr>";
}
echo " </table>";

echo Form::open('../posts/addpost', array('method' => 'post'));
echo "<button class='btn btn-success'>New post</button>";
echo Form::close();

 echo $pagination
?>
</div>
</body>
</html>