<?php


                                   // Create connection
$conn = mysqli_connect("localhost", "root", "", "direction robot");

                                    // TO CHECK CONNECTION
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 

//------------------------------------------------------
// UPDATE forward button 
if (isset($_POST['Forward'])){

   $forward=$_POST['Forward'];
  $sql= "UPDATE `direction` SET `direction`='".$_POST['Forward']."' WHERE 1";

$result = $conn->query($sql);
 echo "Record forward successfully";

}



//------------------------------------------------------
// UPDATE backward button 
if (isset($_POST['Backward'])){
   $backward=$_POST['Backward'];
  $sql= "UPDATE `direction` SET `direction`='".$_POST['Backward']."' WHERE 1";

echo "Record Backward successfully";

$result = $conn->query($sql);
 
}


//------------------------------------------------------
// UPDATE left button 
if (isset($_POST['left'])){
   $left=$_POST['left'];
  $sql= "UPDATE `direction` SET `direction`='".$_POST['left']."' WHERE 1";

echo "Record left successfully";

$result = $conn->query($sql);
 
}


//------------------------------------------------------
// UPDATE stop button 
if (isset($_POST['Stop'])){
   $stop=$_POST['Stop'];
  $sql= "UPDATE `direction` SET `direction`='".$_POST['Stop']."' WHERE 1";

echo "Record stop successfully";

$result = $conn->query($sql);
 
}

//------------------------------------------------------
// UPDATE right button 
if (isset($_POST['Right'])){
   $right=$_POST['Right'];
  $sql= "UPDATE `direction` SET `direction`='".$_POST['Right']."' WHERE 1";
$result = $conn->query($sql);

echo "Record right successfully";

 
}


?>