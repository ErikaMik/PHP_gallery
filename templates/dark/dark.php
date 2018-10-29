<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="templates/dark/style.css">

  <title>PHP Gallery</title>
</head>
<body>
  <div class="container">
    <div class="row p-5 header mb-3">
      <h1>PHP Gallery</h1>
    </div>
    <div class="row p-2 upload mb-3">
      <form action="index.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image" id="image">
        <input type="submit" value="Upload" name="submit">
      </form>
    </div>
     <div class="row p-2 gallery">
      <?php 
      foreach ($images as $image) {
        echo "<div class='col-md-4'>";
        echo "<img class='image' src='images/$image'>";
        echo "</div>";
      } 
      ?>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>