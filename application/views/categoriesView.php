<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel = "stylesheet">
    <link href="css/style.css" rel = "stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>Categories</title>
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
<th>Meta keywords</th>
<th>Description</th>
<th>Delete</th>
<th>Edit</th>
</tr>";

foreach ($blog_categories as $cats) {

    echo "<tr>";
    echo "<td>" . $cats['id']. "</td>" ;
    echo "<td>" . $cats['title']. "</td>";
    echo "<td>" . $cats['meta_title']. "</td>";
    echo "<td>" . $cats['meta_description']. "</td>";
    echo "<td>" . $cats['meta_keywords']. "</td>";
    echo "<td>" . $cats['description']. "</td>";

    //delete post
    echo "<td><form action='/kohana/categories/deletecat' method='post'>";
    echo "<input type='hidden' value='". $cats['id'] ."' name='id' />";
    echo "<button class='btn btn-success'>Delete</button>";
    echo "</form></td>";


    //edit post
    echo "<td><a href='/kohana/categories/editcat?id={$cats['id']}' class='btn btn-success'>Edit</a></td>";

    echo "</tr>";
}
echo " </table>";


echo Form::open('../categories/addcategory', array('method' => 'post'));
echo "<button class='btn btn-success'>New category</button>";
echo Form::close();
echo $pagination
?>
</div>
</body>
</html>