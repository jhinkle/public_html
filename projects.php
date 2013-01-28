<?php
require_once("layout.php");

html_header("Jordan Hinkle - Projects");
navigation();
?>
    <div class="container">
        <h2>Projects</h2>
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">First Project</a></li>
                <li><a href="#tab2" data-toggle="tab">Second Project</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <p>Project 1 description</p>
                </div>
                <div class="tab-pane" id="tab2">
                    <p>Project 2 description</p>
                </div>
            </div>
        </div>
    </div>
<?php
html_footer();
?>
