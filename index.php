<?php 
$data = file_get_contents('https://www.codeschool.com/users/szmoon.json');
$json_data = json_decode($data, true);
// var_dump($json_data['courses']['completed']);
$courses = $json_data['courses']['completed'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title><?php echo $json_data['user']['username']; ?>'s badges</title>
  </head>

  <body>
    <header>
      Badge Viewer
    </header>
    <div class="container">
      <div class="grid">
        <?php
          foreach ($courses as $course) {
            echo '<div class="grid-cell">';
            echo '<img height="200px" src="' . $course["badge"] . '"/><br>';
            echo '<a href="' . $course["url"] . '">' . $course["title"] . '</a>';
            echo '</div>';
          }
        ?>
      </div>
    </div>
  </body>
</html>