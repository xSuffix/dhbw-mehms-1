<!DOCTYPE html>
<html lang="de">

<head>
  <title>Home - DHBW Mehms</title>
  <link rel="stylesheet" href="./styles/index.css">
  <?php include("includes/meta.php"); ?>
</head>


<body>
  <?php include("includes/header.php"); ?>

  <main class="container">

    <div class="toolbar">
      <div class="searchbar">
        <input type="text">
      </div>
    </div>

    <div id="gallery" class="gallery">
      <?php $dirname = "./assets/memes/";
      $images = glob($dirname . "*");

      foreach ($images as $image) {
        if ($image != "./assets/memes/rick.gif") {
          $sizes = getimagesize($image);
          try {
            echo '<a class="meme-card" style="width:' . $sizes[0] * 300 / $sizes[1] .
              'px; flex-grow: ' . $sizes[0] * 300 / $sizes[1] . '"><div style="padding-top: ' .
              $sizes[1] / $sizes[0] * 100 . '%"></div><img src="' . $image . '" /></a>';
          } catch (DivisionByZeroError $e) {
          }
        }
      } ?>
    </div>
  </main>

  <?php include("includes/bottom-navigation.php"); ?>
</body>

</html>