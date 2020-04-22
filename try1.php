<!DOCTYPE html>
<html>
<head>
  <title>Admin panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="boostrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function OpenSlideMenu(){
      document.getElementById('menu').style.width = '300px';
      document.getElementById('sidebar').style.marginLeft = '300px';
    }
  </script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="DropdownMenu" role="userprofile" data-toggle="dropdown"><i class="fa fa-user"></i> Profile </a>
        <div class="dropdown-menu" aria-labelledby="DropdownMenu">
          <a class="dropdown-item" href="#">My account</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
    </ul>
  </nav>

  <!--left side-->
  <div id="sidebar">

    <span class="slide">
      <a href="#" onclick="OpenSlideMenu()"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </span>
    <div id="menu" class="main-menu">
    <ul>
      <li><h2> <a href="#">Admin Panel</a></h2></li>
      <li> <a class="active" href="#"><i class="fa fa-tachometer"></i> Dashboard</a></li>
      <li> <a href="#">Add Records</a></li>
      <li> <a href="#">View Records</a></li>
      <li><a href="#">Reports</a></li>
    </ul>
    </div>
  </div>
 <!--left side-->
 
</body>
</html>