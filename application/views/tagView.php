<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel = "stylesheet">
    <link href="css/style.css" rel = "stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>Tags</title>
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
<th>Description</th>
<th>Delete</th>
<th>Edit</th>
</tr>";

foreach ($blog_tags as $tags) {

    echo "<tr>";
    echo "<td>" . $tags['id']. "</td>";
    echo "<td>" . $tags['title']. "</td>";
    echo "<td>" . $tags['meta_title']. "</td>";
    echo "<td>" . $tags['meta_description']. "</td>";
    echo "<td>" . $tags['meta_keywords']. "</td>";
    echo "<td>" . $tags['description']. "</td>";

    //delete post
    echo "<td><form action='/kohana/tags/deletetag' method='post'>";
    echo "<input type='hidden' value='". $tags['id'] ."' name='id' />";
    echo "<button class='btn btn-success'>Delete</button>";
    echo "</form></td>";


    //edit post
    echo "<td><a href='/kohana/tags/edittag?id={$tags['id']}' class='btn btn-success'>Edit</a></td>";

    echo "</tr>";
}
echo " </table>";
echo Form::open('../tags/addtag', array('method' => 'post'));
echo "<button class='btn btn-success'>New tag</button>";
echo Form::close();
echo $pagination
?>

</div>
</body>

</html>