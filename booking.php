<html>
<body><h1 style="color:green">Booking Confirmed</h1></body>
<?php
$con=  new mysqli('localhost','root');
if($con)
{
	//echo "connecton succesful";
	
}else{
	echo "no connection";
}
mysqli_select_db($con,'rent');
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Contact_No=$_POST['Contact_No'];
$Address=$_POST['Address'];
$Pick_up_date=$_POST['Pick_up_date'];
$Pick_up_time=$_POST['Pick_up_time'];
$Pick_up_point=$_POST['Pick_up_point'];
$Vehicletype=$_POST['Vehicletype'];
$Destination=$_POST['Destination'];
$IdProof=$_POST['IdProof'];
$No_of_Days=$_POST['No_of_Days'];
$n=5; 
function getName($n) { 
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
$VehicleNo=getName($n);
$Total_charges=0;
if($Vehicletype=="Honda city")
{
$Total_charges=2000*$No_of_Days;
}elseif($Vehicletype=="SUV")
{
	$Total_charges=2500*$No_of_Days;
}
elseif($Vehicletype="Van")
{
	$Total_charges=4000*$No_of_Days;

}
else
{
	$Total_charges=5000*$No_of_Days;
}
	$qy="insert into form(FirstName,LastName,Email,Contact_No,Address,Pick_up_date,Pick_up_time,Pick_up_point,Vehicletype,Destination,IdProof,No_of_Days,Total_charges,VehicleNo) values ('$FirstName','$LastName','$Email','$Contact_No','$Address','$Pick_up_date','$Pick_up_time','$Pick_up_point','$Vehicletype','$Destination','$IdProof','$No_of_Days','$Total_charges','$VehicleNo')";
	mysqli_query($con,$qy);
	echo "*********************BOOKING DETAILS**************************";
	echo "<br>";
	echo "NAME: $FirstName $LastName";
	echo "<br>";
	echo "EMAIL: $Email  ";
	echo "<br>";
	echo "CONTACT NO: $Contact_No" ;
	echo "<br>";
	echo "ADDRESS: $Address";
	echo "<br>";
	echo "PICK_UP_POINT : $Pick_up_point ";
	echo "<br>";
	echo "PICK_UP_DATE : $Pick_up_date";
	echo "<br>";
	echo "PICK_UP_TIME : $Pick_up_time";
	echo "<br>";
	echo "VEHICLETYPE: $Vehicletype";
	echo "<br>";
	echo "DESTINATION:$Destination";
	echo "<br>";
	echo "Id PROOF:$IdProof";
	echo "<br>";
	echo "<br>";
	echo "YOUR BOOKED CAR NO IS  : $VehicleNo";
	echo "<br>";
	echo "<br>";
	echo "YOUR TOTAL CHARGES ARE $Total_charges RUPEES";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	//echo "!!!!!!!!!!! HAPPY JOURNEY !!!!!!!!!!!!!!";





?>
<body>
	<h3 style="color:blue">!!!!!HAPPY JOURNEY!!!!!</h3>
	</BR>
 <div class="button">
 	<a href="index.php">Go To Home</a>
 </div>
</body>
</html>