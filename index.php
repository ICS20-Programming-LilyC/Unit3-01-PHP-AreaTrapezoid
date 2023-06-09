<DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Area of Trapezoid Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest.png">

    <!--Stylesheet-->
    <link rel="stylesheet" href="./css/style.css">
    
    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-red.min.css" />

    <!--Title-->
    <title>Calculating the Area of a Trapezoid in PHP</title>
  </head>
  <body>
    <h1>Calculating the Area of a Trapezoid in PHP with User Input</h1>
    
    <!--Div-->
    <div id="div">
      <h3>Insert you input:</h3>

    <!--Form for user input-->
      <form action="./calculations.php" method="post" target="display-result">
        <label for="height">Height of the trapezoid (cm)</label>
        <input type="float" name="height" placeholder="Height...">
        <br>
        <br>
        <label for="side-a">Length of side A (cm)</label>
        <input type="float" name="side-a" placeholder="Side A length...">
        <br>
        <br>
        <label for="side-b">Length of side B (cm)</label>
        <input type="float" name="side-b" placeholder="Side B length...">
        <br>
        <br>
        <input type="submit" value="Calculate" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      </form>
    </div>

    <!--Iframe to display results-->
    <iframe id="display-result" name="display-result"></iframe>
  </body>
</html>