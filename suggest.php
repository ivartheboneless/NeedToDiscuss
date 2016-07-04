<?php

  $pageTitle = "Suggest another topic for discussion.";
  $section = "suggest";
  include("includes/header.php");

?>

<div class="section page">
  <div class="wrapper">
    <h1> <?php echo $pageTitle ?> </h1>
      <p>Can&rsquo;t find your favorite TV Show/Movie? Please let us know by completing the form below. </p>
      <form method="post">
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
  </div>
</div>

<?php include("includes/footer.php"); ?>
