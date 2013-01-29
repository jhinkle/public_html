<?php

function html_header($title) {
    ?>
    <!DOCTYPE HTML>
    <html lang="en">
        <head>
            <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
            <title><?php echo $title; ?></title>
            <link href="css/bootstrap.min.css"         rel="stylesheet" media="screen">
            <link href="css/font-awesome.min.css"      rel="stylesheet" media="screen">
            <!--[if IE 7]>
            <link href="css/font-awesome-ie7.min.css"  rel="stylesheet" media="screen">
            <![endif]-->
            <link href="css/stickyfooter.css"          rel="stylesheet" media="screen">
            <link href="img/favicon.ico"               rel="icon"       type="image/png">
        </head>
        <body>
            <?php
        }
function navigation() {
		$current_script = $_SERVER['PHP_SELF'];
        $projects_class = "";
        $contact_class = "";
        $about_class = "";
		switch ($current_script){
		case "/index.php":
			break;
        case "/projects.php":
            $projects_class ="class=\"active\"";
            break;
        case "/contact.php":
            $contact_class ="class=\"active\"";
            break;
        case "/about.php":
            $about_class ="class=\"active\"";
            break;
		default:
			//echo "<p>Not sure how you got here...</p>";
		}
        ?>
<div id="wrap">
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1 class="span9"><a href="/" class="default nodecoration">Jordan Hinkle</a></h1>
            <ul class="unstyled nav nav-pills">
                <li <?php echo $projects_class; ?> ><a href="projects">Projects</a></li>
                <li <?php echo $about_class;    ?> ><a href="about">About</a></li>
                <li <?php echo $contact_class;  ?> ><a href="contact"><i class="icon-envelope-alt"></i> Contact</a></li>
            </ul>
            <hr/>
        </div>

    </header>
        <?php
}
        function html_footer() {
            ?>
        </div>
            <div id="footer">
                <div class="container">
                    <p class="muted credit">&copy; <a href="/" class="default">Jordan Hinkle</a></p>
                </div>
            </div>
            <!-- Javascript -->
            <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-19623267-2']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            </script>
        </body>
    </html>

    <?php
}
?>

