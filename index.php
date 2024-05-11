<?php require_once __DIR__ . "/Models/Production.php" ?>
<?php require_once __DIR__ . "/Models/Movie.php" ?>
<?php //require_once __DIR__ . "/server.php" ?>


<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/app.css">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>Document</title>
</head>
<body>

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <div id="App">
    <?php include __DIR__ . "/partials/header.php" ?>
    <?php include __DIR__ . "/partials/main.php" ?>
    <?php include __DIR__ . "/partials/footer.php" ?>
  </div>

  


  <script src="./js/app.js"></script>
</body>
</html>