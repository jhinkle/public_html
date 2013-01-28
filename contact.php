<?php
session_start();

if (isset($_POST['submit'])) {
    if (!empty($_POST['inputName']) && !empty($_POST['inputEmail']) && !empty($_POST['inputMessage'])) {
        if ($_POST['inputCaptcha'] == $_SESSION['rand_code']) {
            $ToEmail = 'jordan.hinkle@gmail.com';
            $EmailSubject = 'JH contact form';
            $mailheader = "From: ".$_POST["inputEmail"]."\r\n";
            $mailheader .= "Reply-To: ".$_POST["inputEmail"]."\r\n";
            $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $MESSAGE_BODY = "Name: ".$_POST["inputName"]."<br />";
            $MESSAGE_BODY .= "Email: ".$_POST["inputEmail"]."<br />";
            $MESSAGE_BODY .= "Message: ".nl2br($_POST["inputMessage"])."<br />";
            mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");

            // send email
            $accept = "Thank you for contacting me.";
        } else {
            $error = "Please verify that you typed in the correct code.";
        }
    } else {
        $error = "Please fill out the entire form.";
    }
}
?>
<!DOCTYPE HTML>
<?php
require_once("layout.php");

html_header("Jordan Hinkle - Contact me");
navigation();
?>

<div class="container">
        <h2>Contact</h2>
        <?php if (!empty($error)) echo '<div class="alert alert-error">' . $error . '<button type="button" class="close" data-dismiss="alert">×</button></div>'; ?>
        <?php if (!empty($accept)) echo '<div class="alert alert-success">' . $accept . '<button type="button" class="close" data-dismiss="alert">×</button></div>'; ?>
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                    <input type="email" id="inputEmail" name="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputName">Your Name</label>
                <div class="controls">
                    <input type="text" id="inputName"  name="inputName" placeholder="Name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputMessage">Message</label>
                <div class="controls">
                    <textarea rows="3" id="inputMessage"  name="inputMessage"></textarea>

                </div>

            </div>
            <div class="control-group">
                <div class="controls">
                    <img src="captcha.php" width="170" height="60" />
                </div>

            </div>
            <div class="control-group">
                <label class="control-label" for="inputCaptcha">Are you human?</label>
                <div class="controls">
                    <input type="text" id="inputCaptcha"  name="inputCaptcha" placeholder="">

                </div>

            </div>

            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>

                </div>

            </div>
        </form>
    </div>
<?php
html_footer();
?>
