<?php

  $pageTitle = "Full Catalog";
  $section = null;
if(isset($_GET["cat"])) {
    if($_GET["cat"] == "tv") {
      $pageTitle = "TV";
      $section = "tv";
    } else if($_GET["cat"] == "movies") {
      $pageTitle = "Movies";
      $section = "movies";
    } else if($_GET["cat"] == "music") {
      $pageTitle = "Music";
      $section = "music";
    }
}
  include("includes/header.php");

?>

<div class="section page">
  <h1> <?php echo $pageTitle ?> </h1>
</div>

<?php include("includes/footer.php"); ?>
