<?php 

$word = $_POST['word'];
$text_1 = $_POST['text'];

$text_1_lenght = strlen($text_1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>recive PHP</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col col-6 border-1 border-black">
        <h1 class="fw-bold text-danger">IL testo sensa censura é:</h1>
        <p><?php echo $text_1 ?></p>
        <span class="fs-2">Il testo é formato da <strong><?php echo $text_1_lenght ?></strong> parole</span>
      </div>
      <div class="col col-6 border-1 border-black">
      <h1 class="fw-bold text-success">IL testo con la censura é:</h1>
        <p><?php echo $text_2 ?></p>
        <span class="fs-2">Il testo é formato da <strong><?php echo $text_2_lenght ?></strong> parole</span>
      </div>
    </div>
  </div>
</body>
</html>