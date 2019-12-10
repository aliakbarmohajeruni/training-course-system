<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title ?></title>
  <!-- Bootstrap core CSS -->
  <link href="<?= ROOT_PATH  ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?= ROOT_PATH  ?>css/simple-sidebar.css" rel="stylesheet">
  <link href="<?= ROOT_PATH  ?>css/bootstrap-rtl.min.css" rel="stylesheet">
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">پنل مدیریتی</div>
      <div class="list-group list-group-flush">
        <a href="<?= ROOT_PATH  ?>" class="list-group-item list-group-item-action bg-light">داشبورد</a>
        <a href="<?= ROOT_PATH  ?>bots" class="list-group-item list-group-item-action bg-light">مدیریت بات ها</a>
        <a href="<?= ROOT_PATH  ?>chats" class="list-group-item list-group-item-action bg-light">لیست گروه ها، کانال ها</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">خروج از سیستم</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
          <?= $content ?>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?= ROOT_PATH  ?>js/jquery.min.js"></script>
  <script src="<?= ROOT_PATH  ?>js/bootstrap.bundle.min.js"></script>
</body>
</html>