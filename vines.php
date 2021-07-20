<!DOCTYPE html>
<html lang="de">

<head>
  <title>Vines - DHBW Mehms</title>
  <?php include("includes/meta.php"); ?>
  <style>
    :root {
      --banner-top: #ff9900;
			--banner-bottom: #eb7967;
    }

    .vines {
      animation: 0.2s color-p-primary forwards;
    }
  </style>
  <link rel="stylesheet" href="vines.css">
  <link rel="stylesheet" href="styles/global.css">
</head>


<body>
  <?php include("includes/header.php"); ?>
  <main class="container">
  <div class="heading">
    <h1>Vines</h1>
    <h2>Videos, Audio und Animationen</h2>
  </div>
  <div class="paper">
    <h3>Beispielüberschrift<pre>&lth3>Hello  ,World&lt/h3></pre></h3>
    <hr>
    <div>
      <?php

        $dirname = "./assets/vinezz/";
        $videos = glob($dirname . "*" . "*");

        foreach ($videos as $video) {
          $videoName = explode("/", $video);
          $videoName = end($videoName);
          $title = explode(".",$videoName);
          $title = $title[0];
          try {
            echo '<figure class="vine"><video class="vine" width="560px" height="315px" controls><source src="' . $video . '" type="video/mp4">Your browser does not support the video tag.
            </video><figcaption>' . $title . '</figcaption>
            </figure>';
          } catch (DivisionByZeroError $e) {
          }
          }
        ?>
      </div>
    <hr>
    <h3>External and Audio-only</h3>
    <hr>
    <figure class="vine">
    <iframe class="vine" width="560px" height="315px" src="https://www.youtube.com/embed/EqekSuj5HCo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <figcaption>Walter Frosch - Vollblutprofi</figcaption>
    </figure>
    <figure class="vine">
    <iframe class="vine" width="560px" height="315px" src="https://www.youtube.com/embed/asjQNZn7vng" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <figcaption>Rendering at 5 AM</figcaption>
    </figure>
    <figure class="vine">
    <iframe class="vine" width="560px" height="315px" src="https://www.youtube.com/embed/b8HO6hba9ZE" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <figcaption><em>We like to Party</em> - Thomas the Dank Engine</figcaption>
    </figure>
    <figure class="vine">
    <iframe class="vine" width="560px" height="315px" src="https://www.youtube.com/embed/nXjro36-uLE" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <figcaption>Alex Jones vs Creeper</figcaption>
    </figure>
    <figure class ="vine">
      <audio class="vine" controls><source src="assets\audio\udjjd.mp3" type="audio/mp3"></audio>
      <figcaption>Rick Astley - Never gonna give you up</figcaption>
    </figure>
    </div>
    </div>
  </main>

  <?php include("includes/footer.php"); ?>
  <?php include("includes/bottom-navigation.php"); ?>
</body>

</html>