<?php
  include("includes/data.php");
  include("includes/functions.php");

  if(isset($_GET["id"])) {
    $id = $_GET["id"];
    if(isset($catalog[$id])) {
      $item = $catalog[$id];
    }
  }

  if(!isset($item)) {
    header("location:catalog.php");
    exit;
  }

  $pageTitle = $item["title"];
  $section = null;

  include("includes/header.php");

?>

<div class="section page">

  <div class="wrapper">

    <div class="breadcrumbs">
      <a href="catalog.php"> Full Catalog</a>
      &gt; <a href="catalog.php?cat=<?php echo strtolower($item["category"]); ?>">
      <?php echo $item["category"]; ?> </a>
      &gt; <?php echo $item["title"]; ?>
    </div>

    <div class="media-picture">

      <span>

        <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["title"]; ?>" />

      </span>

    </div>

    <div class="media-details">

      <h1><?php echo $item["title"]; ?></h1>

      <table>

        <tr>

          <th>Category</th>

          <td><?php echo $item["category"]; ?></td>

        </tr>

        <?php if(strtolower($item["category"])  != "other") { ?>

          <tr>

            <th>Genre</th>

            <td><?php echo $item["genre"]; ?></td>

          </tr>

          <tr>

            <th>Year</th>

            <td><?php echo $item["year"]; ?></td>

          </tr>

          <tr>

            <th>Starring</th>

            <td><?php echo implode(", ", $item["stars"]); ?></td>

          </tr>

        <?php } ?>

      </table>

    </div>

  </div>

</div>



<?php include("includes/footer.php"); ?>
