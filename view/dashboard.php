<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Cod'Flix</title>

    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/lib/font-awesome/css/all.min.css" rel="stylesheet" />

    <link href="public/css/partials/partials.css" rel="stylesheet" />
    <link href="public/css/layout/layout.css" rel="stylesheet" />
  </head>


  <body>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <h2 class="title">Welcome</h2>
        <div class="sidebar-menu">
          <ul>
            <li class="active"><a href="index.php">Media</a></li>
            <li><a href="index.php?action=profil">My profile</a></li>
            <li><a href="index.php?action=choice">Choice by category</a></li>
            <li><a href="index.php?action=logout">Disconnect</a></li>
            <li><a href="index.php?action=contactde">Contact us</a></li>
          </ul>
        </div>
      </nav>
      <div id="content">
        <div class="header">
          <h2 class="title">Cod<span>'Flix</span></h2>
          <div class="toggle-menu d-block d-md-none">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fas fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
          </div>
        </div>
        <div class="content p-4">
          <?= $content; ?>
        </div>
        <footer>Copyright Cod'Flix</footer>
      </div>
    </div>

    <script src="public/lib/jquery/js/jquery-3.5.0.min"></script>
    <script src="public/lib/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="public/js/script.js"></script>
  </body>

</html>
