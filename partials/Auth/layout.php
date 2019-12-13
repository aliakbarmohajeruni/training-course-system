<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= ROOT_PATH  ?>css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?= ROOT_PATH  ?>css/style.css">
    <link href="<?= ROOT_PATH  ?>css/font-vazir.css" rel="stylesheet">
</head>

<body>

<div class="mt_main">
  <?= $content ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?= ROOT_PATH  ?>js/bootstrap.bundle.min.js">
</script>
</body>
</html>