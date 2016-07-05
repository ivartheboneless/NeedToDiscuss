<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $details = $_POST["details"];

  echo "<pre>";
  $email_body = "";
  $email_body .= "Name " . $name . "\n";
  $email_body .= "Email " . $email . "\n";
  $email_body .= "Details " . $details . "\n";
  echo $email_body;
  echo "</pre>";

  //To Do: Send email.
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
        </table>
        <input type="submit" value="Send" />
      </form>
      <?php } ?>
  </div>
</div>

<?php include("includes/footer.php"); ?>
