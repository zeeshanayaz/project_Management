<?php

$con = mysqli_connect("localhost","root","","healthcare_db") or die("Database Cannot Connected:");

?>

<?php

	$name = $_POST['name'];
    $emailAddress = $_POST['email'];
    $phoneNumber = $_POST['contact'];
    $address = $_POST['address'];
    $checkInDate = $_POST['checkindate'];
	$checkoutDate = $_POST['checkoutdate'];
    $timing = $_POST['timing'];
	
  
  if(isset($_POST['submitAppointment'])){
    $querystr = "INSERT INTO 'appointment'  VALUES ('','$name','$emailAddress','$phoneNumber','$address','$checkInDate','$checkoutDate','$timing')";
    if(mysqli_query($con,$querystr))
	{
		echo '<script type="text/javascript">
      alert("Your Appointmet has Successfull");
        </script>';
		echo "<script>
		
		
		window.location.assign('index.php');
		
		</script>";
	}
	else
	{
		echo "<div>user not created</div>";
		echo "<script>
		
		window.location.assign('index.php');
		
		</script>";
		
	}

?>