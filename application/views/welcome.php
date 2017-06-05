<?php

foreach ($posts as $post) {
    echo $post['name']."</br>" ;
    echo $post['annonce']."</br>";
    echo $post['post']."</br>";

}
?>
<form action="addPostView.php" method="GET">
<input type="submit" name = "submit" value="Add new post" />
</form>