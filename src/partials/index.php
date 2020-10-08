<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <link rel="stylesheet" href="../../dist/app.css">
    <title>Dischi</title>
  </head>
  <body>
    <header>
      <div class="container">
          <img src="../logo.png" alt="logo">
      </div>
    </header>
    <main>
      <div class="row">

      </div>
    </main>


    <!-- TEMPLATE -->
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="disc">
          <div class="poster">
            <img src="{{poster}}" alt="poster">
          </div>
          <div class="title">
            <h2>{{title}}</h2>
          </div>
          <div class="artist">
            <p> {{author}} <br> {{year}}</p>
          </div>
      </div>
    </script>
    <!-- END TEMPLATE -->
    <script src="../app.js" charset="utf-8"></script>
  </body>
</html>
