<!DOCTYPE html>
<html>
  <head>
    <title><?= $page->title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <!-- Static navbar -->
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">PHP Node</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class='dropdown'>
                <a role='button' data-toggle='dropdown' href='#'>Socket.io <span class="caret"></span></a>
                <ul class='dropdown-menu'>
                    <li role='presentation'>
                        <a role='menuitem' tabindex='-1' href='canvas.php'>Canvas</a>
                    </li>
                    <li role='presentation'>
                        <a role='menuitem' tabindex='-1' href='chat.php'>Chat</a>
                    </li>
                </ul>
            </li>
            <li class='dropdown'>
                <a role='button' data-toggle='dropdown' href='#'>Fractal <span class="caret"></span></a>
                <ul class='dropdown-menu'>
                    <li role='presentation'>
                        <a role='menuitem' tabindex='-1' href='fractal.php'>Browser</a>
                    </li>
                    <li role='presentation'>
                        <a role='menuitem' tabindex='-1' href='fractalserver.php'>Server</a>
                    </li>
                </ul>
            </li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      
      <div class="container">
