<?php
 include 'db.php'; //connect the connection page
 session_start();
if(!isset($_SESSION['usertype']))
{
   header("location: login.php");

}
$name=$_SESSION['usertype'];
$id=$_SESSION['id'];
$cid=$_SESSION['c_id'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "tag8_local");
$query = "SELECT * FROM agent";
$result = mysqli_query($link,$query);
while($row = mysqli_fetch_assoc($result))
{
    $id1 = $row['id']+1;
}
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
//$agent_id = mysqli_real_escape_string($link, $_REQUEST['agent_id']);
$agent_code = mysqli_real_escape_string($link, $_REQUEST['agent_code']);
$agent_name = mysqli_real_escape_string($link, $_REQUEST['agent_name']);
$email_id = mysqli_escape_string($link, $_REQUEST['email_id']);
$contact_no = mysqli_escape_string($link, $_REQUEST['contact_no']);

 
// attempt insert query execution
$sql = "INSERT INTO agent (agent_code,agent_name,email_id,contact_no,u_id,c_id) VALUES ('$agent_code','$agent_name','$email_id','$contact_no','$id','$cid')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "tag8_local");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
//$ship_id = mysqli_real_escape_string($link, $_REQUEST['ship_id']);
$ship_company_name = mysqli_real_escape_string($link, $_REQUEST['shipping_company_name']);
$ship_address = mysqli_real_escape_string($link, $_REQUEST['ship_address']);
//$ship_add2 = mysqli_real_escape_string($link, $_REQUEST['ship_add2']);
$ship_city = mysqli_real_escape_string($link, $_REQUEST['ship_city']);
$ship_state = mysqli_real_escape_string($link, $_REQUEST['ship_state']);
$ship_country = mysqli_real_escape_string($link, $_REQUEST['ship_country_text']);
$ship_zipcode = mysqli_real_escape_string($link, $_REQUEST['ship_zipcode']);


 
// attempt insert query execution
$sql = "INSERT INTO agent_shipping_address (shipping_company_name,agent_id,ship_address,ship_city,ship_state,ship_country,ship_zipcode,u_id,c_id) VALUES ('$ship_company_name','$id1','$ship_address','$ship_city','$ship_state','$ship_country','$ship_zipcode','$id','$cid')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "tag8_local");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
//$bill_id = mysqli_real_escape_string($link, $_REQUEST['bill_id']);
$bill_company_name = mysqli_real_escape_string($link, $_REQUEST['billing_company_name']);
$bill_address = mysqli_real_escape_string($link, $_REQUEST['bill_address']);
//$bill_add2 = mysqli_real_escape_string($link, $_REQUEST['bill_add2']);
$bill_city = mysqli_real_escape_string($link, $_REQUEST['bill_city']);
$bill_state = mysqli_real_escape_string($link, $_REQUEST['bill_state']);
$bill_country = mysqli_real_escape_string($link, $_REQUEST['bill_country']);
$bill_zipcode = mysqli_real_escape_string($link, $_REQUEST['bill_zipcode']);


 
// attempt insert query execution
$sql = "INSERT INTO agent_billing_address (agent_id,bill_company_name,bill_address,bill_city,bill_state,bill_country,bill_zipcode,u_id,c_id) VALUES ('$id1','$bill_company_name','$bill_address','$bill_city','$bill_state','$bill_country','$bill_zipcode','$id','$cid')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
<?php
/*$link = mysqli_connect("localhost", "root", "", "sagar");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$agent_code = mysqli_real_escape_string($link, $_REQUEST['agent_code']);
$agent_name = mysqli_real_escape_string($link, $_REQUEST['agent_name']);
$ship_add1 = mysqli_real_escape_string($link, $_REQUEST['ship_add1']);
$bill_add1 = mysqli_real_escape_string($link, $_REQUEST['bill_add2']);

$sql = "INSERT INTO order_details (agent_code,agent_name,shipping_address,billing_address2) VALUES ('$agent_code','$agent_name','$ship_add1','$bill_add2')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);*/
?>
<?php
$link = mysqli_connect("localhost", "root", "", "tag8_local");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$agent_code = mysqli_real_escape_string($link, $_REQUEST['agent_code']);
$agent_name = mysqli_real_escape_string($link, $_REQUEST['agent_name']);
$shipping_company_name = mysqli_real_escape_string($link, $_REQUEST['shipping_company_name']);
$email_id = mysqli_escape_string($link, $_REQUEST['email_id']);
$contact_no = mysqli_escape_string($link, $_REQUEST['contact_no']);
$ship_address = mysqli_real_escape_string($link, $_REQUEST['ship_address']);
$bill_address = mysqli_real_escape_string($link, $_REQUEST['bill_address']);

$sql = "INSERT INTO agent_details (agent_code,agent_name,company_name,email_id,contact_no,ship_address,bill_address,u_id,c_id) VALUES ('$agent_code','$agent_name','$shipping_company_name','$email_id','$contact_no','$ship_address','$bill_address','$id','$cid')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>