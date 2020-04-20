<!DOCTYPE html>
<html>
<head>
	<title>Admin module</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="boostrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
  <script src="boostrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/login_style.css">
</head>
<body>
	 <nav class="navbar navbar-expand-sm bg-secondary navbar-dark cyan mb-4">
      
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="#">My account</a>
              <a class="dropdown-item" href="#">Log out</a>
            </div>
          </li>
        </ul>
  </nav>

  <div class="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul>
      <li><strong> <a href="#">Admin Panel</a></strong></li>
      <li> <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Dashboard</a></li>
      <li> <a href="#">Add Records</a></li>
      <li> <a href="#">View Records</a></li>
      <li><a href="#">Reports</a></li>

    </ul>

  </div>
<script type="text/javascript">
  function toggleSidebar() {
    document.getElementByClass("sidebar").classList.toggle('active');
  }
</script>
</body>
</html>