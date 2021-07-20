<!DOCTYPE html>
<html lang="en">

<head>
  <title>Math - DHBW Mehms</title>
  <?php include("includes/meta.php"); ?>
  <style>
    :root {
      --banner-top: #b167eb;
      --banner-bottom: #4bd8f6;
    }

    .vines {
      animation: 0.2s color-p-primary forwards;
    }
  </style>
  <link rel="stylesheet" href="numbers.css">
</head>


<body>
  <?php include("includes/header.php"); ?>

  <?php $number = "ranking";
      if (isset($_GET['number'])) {
        $number = $_GET['number'];
      }

      include("includes/numbers/" . $number . ".php");
  ?>

  <?php include("includes/footer.php"); ?>
  <?php include("includes/bottom-navigation.php"); ?>
</body>

</html>