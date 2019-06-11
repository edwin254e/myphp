<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" media="screen" href="masterStyle.css">
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>welcome to doubleEats</title>
<style>
  *{
margin:0;
padding: 0;
font-family: arial, helvetica, sans-serif;

  }
	#sidebar{
position: fixed;
width: 200px;
height: 100%;
background: #151719;
left: -220px;
transition: all 0.3s ease-in-out;
text-align: center;


	}
	#sidebar.active{

left: 0px;


	}
	#sidebar ul li{
color: rgba(230,230,0.9);
padding: 15px 10px;
border-bottom: 1px solid rgba(100,100,100,0.3);
	}
#sidebar .toggle-btn{
position: absolute;
left: 230px;
top: 20px;


}
#sidebar .toggle-btn span{
display: block;
width: 30px;
height: 6px;
background: #151719;
margin: 5px 0px;

}
	#sidebar ul li a{
color: #ffffff;
text-decoration: none;
text-transform: uppercase;
padding: 10px;


	}
	#sidebar ul li a:hover{
background: #d5ee;

	}

</style>
</head>
<body>
  <div class="containe">
<div id="sidebar">
<div class="toggle-btn" onclick="toggleSidebar()">
<span></span>
<span></span>
<span></span>
</div>
<ul>
  <li><img src="images/images.jpg" alt="logo" width="100%"></li>
<li><a href="AddProducts.php">Add Products</a></li>
<li><a href="Add.php">Add Users</a></li>
<li><a href="Update.php">Update</a></li>
<li><a href="admin.php">Delete</a></li>
<li><a href="search.php">Search</a></li>
<li><a href="admin.php">Admin</a></li>
<li><a href="index.php">Logout</a></li>
</ul>



</div>
</div>

<script>
function toggleSidebar(){
document.getElementById("sidebar").classList.toggle('active');

}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
