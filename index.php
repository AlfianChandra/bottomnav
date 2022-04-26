<!DOCTYPE Html>
<html>
	<head>
	   <title>CSS Trick</title>
	   <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css"/>
	   <link rel="stylesheet" href="assets/style.css"/>
	   <script src="assets/jquery/jquery.min.js"></script>
	   <script src="assets/script.js"></script>
	</head>

	<body>
	<div style="padding:20px;background: #fff;margin:25px;border-radius: 10px;">
	   <h1 style="text-align: center;color:#333;">Mobile Bottom Navbar</h1>

	   <p style="color:#333;text-align: center">
		  #csstrick<br><b>Using CSS & Javascript (jQuery)</b><br>
		  <span style="font-size:12px;">by <b>Alfian Chandra</b></span>
	   </p>
	</div>
	<div class="nav-parent">
	   <div class="active">
		  <div class="leftround"></div>
		  <div class="rightround"></div>
	   </div>

	   <div class="activebar">

	   </div>
	   <div class="nav">
		  <a href="#" class="navmenu" id="firstActive">
			 <span class="fa fa-home"></span>
			 <div>Beranda</div>
		  </a>
		  <a href="#" class="navmenu">
			 <span class="fa fa-envelope"></span>
			 <div>Chat</div>
		  </a>
		  <a href="#" class="navmenu">
			 <span class="fa fa-cog"></span>
			 <div>Setting</div>
		  </a>
		  <a href="#" class="navmenu">
			 <span class="fa fa-user"></span>
			 <div>Akun</div>
		  </a>
	   </div>
	</div>
	</body>
</html>