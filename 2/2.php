<?php include('model.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href=https://getbootstrap.com/favicon.ico">

    <title>Form Test</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://getbootstrap.com//assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/examples/sticky-footer/sticky-footer.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="https://getbootstrap.com//assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://getbootstrap.com//assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><a href="/functions_forms_tasks/2/2.php">Form</a></h1>
    </div>

    <div>
        <form id="form" method="get">
            TextArea1: <textarea form="form" rows="10" class="form-control" name="t_area1"></textarea>
            Count: <input type="text" class="form-control" value="3" name="count"/>
            <input type="submit" value="Send">

            <pre>
                <?php
                if (isset($_GET["t_area1"]) and $_GET["count"]) {
                    $text1 = $_GET["t_area1"];
                    $count = $_GET["count"];
                    print_r(max_3_words($text1, $count));
                }
                ?>
            </pre>
        </form>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">phpAcademy</p>
    </div>
</footer>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
