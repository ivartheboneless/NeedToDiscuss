<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim(filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL));
  $details = trim(filter_input(INPUT_POST,"details", FILTER_SANITIZE_SPECIAL_CHARS));

  if($name == "" OR $email == "" OR $details == "") {
    echo "Please fill in the required fields: Name, Email, and Details.";
    exit;
  }

  if($_POST["eyecolor"] != "") {
    echo "Bad form input";
    exit;
  }

  require("includes/phpmailer/class.phpmailer.php");

  $mail = new PHPMailer;

  if(!$mail->ValidateAddress($email)) {
    echo "Invalid Email Address";
    exit;
  }

  $email_body = "";
  $email_body .= "Name " . $name . "\n";
  $email_body .= "Email " . $email . "\n";
  $email_body .= "Details " . $details . "\n";

  $mail->setFrom($email, $name);
  $mail->addAddress('ammar2411@gmail.com', 'Ammar');
  $mail->isHTML(false);

  $mail->Subject = 'Discussion Forum Suggestion from ' . $name;
  $mail->Body = $email_body;

  if(!$mail->send()) {
    echo "Message could not be sent.";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
  }

  header("location:suggest.php?status=thanks"); //redirection to the thank you page.
}

  $pageTitle = "Suggest another topic for discussion.";
  $section = "suggest";
  include("includes/header.php");
//input gets stored in $_POST["name"]
?>

<div class="section page">
  <div class="wrapper">
    <h1> <?php echo $pageTitle ?> </h1>
    <?php if(isset($_GET["status"]) && $_GET["status"] == "thanks") {
      echo "<p>Thanks for the email! We will be checking out your suggestion shortly!</p>";
    } else { ?>
      <p>Can&rsquo;t find your favorite TV Show/Movie? Please let us know by completing the form below. </p>
      <form method="post" action = "suggest.php">
        <table>
          <tr>
            <th><label for="name">Name</label></th>
            <td><input type="text" id="name" name="name"/></td>
          </tr>
          <tr>
            <th><label for="email">Email</label></th>
            <td><input type="text" id="email" name="email"/></td>
          </tr>
          <tr>
            <th><label for="details">Message</label></th>
            <td><textarea name="details" id="details"></textarea></td>
          </tr>
          <tr style="display:none">
            <th><label for="eyecolor">Eye Color</label></th>
            <td><input type="text" id="eyecolor" name="eyecolor"/></td>
          </tr>
        </table>
        <input type="submit" value="Send" />
      </form>
      <?php } ?>
  </div>
</div>

<?php include("includes/footer.php"); ?>
