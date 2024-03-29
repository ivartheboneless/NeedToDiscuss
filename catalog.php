<?php
  include("includes/data.php");
  include("includes/functions.php");

  $pageTitle = "Full Catalog";
  $section = null;
if(isset($_GET["cat"])) {
    if($_GET["cat"] == "tv") {
      $pageTitle = "TV";
      $section = "tv";
    } else if($_GET["cat"] == "movies") {
      $pageTitle = "Movies";
      $section = "movies";
    } else if($_GET["cat"] == "other") {
      $pageTitle = "Other";
      $section = "other";
    }
}
  include("includes/header.php");

?>

<div class="section catalog page">
  <div class="wrapper">
    <h1>
      <?php
        if($section != null) {
          echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
        }
        echo $pageTitle;
      ?>
    </h1>
    <ul class="items">
      <?php
      $categories = array_category($catalog, $section);
      foreach($categories as $id) {
      echo get_item_html($id, $catalog[$id]);
    } ?>
    </ul>
  </div>

</div>

<?php include("includes/footer.php"); ?>
