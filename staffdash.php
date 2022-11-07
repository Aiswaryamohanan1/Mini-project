<?php session_start(); 
include 'dbconn.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">STAFF<b>DASHBOARD</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="userpic.png">
				<h4>WELCOME!</h4>
			</div>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="applyleave.php">
						<i class="fa fa-plus icons"></i>
						<span>Apply Leave</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-plus icons" aria-hidden="true"></i>
						<span>Upload documents</span>
					</a>
				</li>
				
				<li>
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Setting</span>
					</a>
				</li>
				<li>
					<a href="logout.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
           
			<h1>WELCOME</h1>
			<p>Department of Land Revenue</p>
			<?php
$currentuser= $_SESSION['email'];
$sql="SELECT * FROM `staffregg` WHERE email='$currentuser'";
$gotresult=mysqli_query($conn,$sql);
if($gotresult)
{
    if(mysqli_num_rows($gotresult) > 0)
    {
        while($row=mysqli_fetch_array($gotresult))
        {
            //print_r($row['email']);
            ?>
            <p>Welcome <?php echo $row['email'];?></p>
            <?php
        }
    }
}
?>
		</section>
	</div>

</body>
</html>