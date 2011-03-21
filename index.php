<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type"
          content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="css/default.css" type="text/css"/>
    <title>SimpleBlogs System</title>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet"
          type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".login").draggable();
            $(".login").resizable();
			$("input:submit",".login").button();

        });
    </script>
</head>
<body>
<p>&nbsp;</p>

<p>&nbsp;</p>

<div id="wrapper">

    <?php

    $page = $_GET['page'];
    if($page){
        include("content/".$page.".php");
    }
    else
        include("content/login.php");

    ?>

</div>

</div>
</body>
</html