<?php
foreach ($blog_categories as $cats) {
    echo $cats['title']."</br>" ;
    echo $cats['meta_title']."</br>";
    echo $cats['meta_description']."</br>";
    echo $cats['meta_keywords']."</br>";
    echo $cats['description']."</br>";
}

echo Form::open('categories.', array('method' => 'post'));
echo Form::button('post', 'New Post', array('type' => 'submit'));
echo Form::close();

?>

// no comments


