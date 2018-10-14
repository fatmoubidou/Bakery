<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://fonts.googleapis.com/css?family=Pacifico|Slabo+27px" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <!-- HEADER  -->
  <?php
    include("header.php");
  ?>
  <!-- MAIN INDEX  -->
  <main class="flexColumn aiCenter">
    <section id="mainPhoto" class="width80 flexColumn aiCenter marginTB1">
      <img class="tablet" src="img/layercake.png" alt="">
      <h1>titre</h1>
      <h2>Slogan</h2>
    </section>
    <div class="width80 flex jcBetween desktopFlex">
      <div class="icone width30 flexColumn aiCenter mainBgColor">
        <i class="fas fa-birthday-cake fa-9x"></i>
        <h3>titre</h3>
      </div>
      <div class="icone width30 flexColumn aiCenter secondBgColor">
        <i class="fas fa-coffee fa-9x"></i>
        <h3>titre</h3>
      </div>
      <div class="icone width30 flexColumn aiCenter thirdBgColor">
        <i class="fas fa-cookie-bite fa-9x"></i>
        <h3>titre</h3>
      </div>
    </div>
    <div class="width80 flexColumn marginTB1">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie tellus sed vehicula auctor.
        Sed sed pharetra dolor. Duis nec risus nibh. Aenean ultricies purus quam, nec sodales tortor mollis in.
        Suspendisse rhoncus commodo mi. Morbi feugiat, mi a facilisis pharetra, turpis nisi varius erat, ut fringilla
        felis lorem porttitor magna. Ut vitae vulputate est. Pellentesque sed aliquam ex. Donec non ex sed ex pellentesque
        ultricies eget in odio. Duis nec turpis ut lectus lobortis suscipit. Suspendisse varius accumsan dapibus. Ut nec aliquam velit,
        sollicitudin bibendum ante. Nulla vel pharetra erat. Pellentesque in pulvinar sem.
      </p>
      <div class="">
        <img class="width100" src="img/cupcake.png" alt="">
      </div>

    </div>

    <section class="width80 flexColumn">
      <h2>Sous titre</h2>
      <div id="blocArticle" class="flex">
        <article class="marginTB1">
          <h3 class="txtCenter">titre</h3>
          <div class="divImg">
            <img src="img/layer-cake-aux-macarons.jpg" alt="">
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            In molestie tellus sed vehicula auctor. Sed sed pharetra dolor.
          </p>
          <div class="flex jcEnd">
            <div class="width50 flex jcAround">
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-twitter-square"></i>
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>

        </article>
        <article class="marginTB1">
          <h3 class="txtCenter">titre</h3>
          <div class="divImg">
           <img src="img/gateau-au-chocolat.jpg" alt="">
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            In molestie tellus sed vehicula auctor. Sed sed pharetra dolor.
          </p>
          <div class="flex jcEnd">
            <div class="width50 flex jcAround">
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-twitter-square"></i>
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>
        </article>
        <article class="marginTB1">
          <h3 class="txtCenter">titre</h3>
          <div class="divImg">
            <img src="img/licorne.jpg" alt="">
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            In molestie tellus sed vehicula auctor. Sed sed pharetra dolor.
          </p>
          <div class="flex jcEnd">
            <div class="width50 flex jcAround">
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-twitter-square"></i>
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>
        </article>
      </div>
    </section>
  </main>

  <!-- FOOTER   -->
  <?php  
    include("footer.php");
  ?>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
