<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "static/head.php"; ?>
</head>

<body>
  <?php
  include "components/Loader.php";
  ?>
  <div class="contenido" id="contenido">
    <?php
    include "static/header.php";
    include "components/Index/BannerIndex.php";
    ?>
    <main id="main">
      <?php
      include "components/Index/FeaturedServices.php";
      include "components/Index/AboutSectionIndex.php";
      include "components/Index/FeaturesSection.php";
      include "components/Index/CallToAction.php";
      ?>
    </main>
    <?php include "static/footer.php"; ?>
  </div>
</body>

</html>