<?php defined('SYSPATH') or die('No direct script access.');

?><!DOCTYPE html>
<html>
<head>
    <title><?php echo isset($title) ? $title :  'Posts'  ?></title>

    <!-- Base URL -->
    <base href="<?php echo URL::base(true, false) ?>">


    <!-- System -->
    <meta name="name" content="<?php echo isset($name) ? $name : '' ?>" />



</head>

<body>
<!-- Template Content  -->
<?php echo isset($content) ? $content : '' ?>
<!-- JS Code -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>