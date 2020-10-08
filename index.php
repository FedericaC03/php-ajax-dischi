<?php include_once("src/partials/db.php") ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title></title>
  </head>
  <body>
    <header>
      <div class="container">
          <img src="src\logo.png" alt="logo">
      </div>
    </header>
    <main>
      <div class="row">
        <?php foreach ($database as $disc): ?>
        <div class="disc">
            <div class="poster">
              <img src="<?php echo $disc["poster"]; ?>" alt="poster">
            </div>
            <div class="title">
              <h2> <?php echo $disc["title"]; ?></h2>
            </div>
            <div class="artist">
              <p> <?php echo $disc["author"]; ?> <br> <?php echo $disc["year"]; ?></p>
            </div>
        </div>
      <?php endforeach ?>
      </div>
    </main>


    <!-- TEMPLATE -->
    <script id="entry-template" type="text/x-handlebars-template">
        <div class="entry">
          <h1>{{title}}</h1>
          <div class="body">
            {{body}}
          </div>
        </div>
    </script>
    <!-- END TEMPLATE -->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
