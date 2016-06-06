<?php
session_start();
include 'connection.php';
$con=connect();
?>
<?php
if(isset($_GET['Answer_Id']) && !empty($_GET['Answer_Id']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $Answer_Id = mysqli_real_escape_string($con,$_GET['Answer_Id']); // Set email variable
    $hash = mysqli_real_escape_string($con,$_GET['hash']);
    $search = mysqli_query($con,"SELECT Answer_Id, hash, Approved FROM review WHERE Answer_Id='".$Answer_Id."' AND hash='".$hash."' AND Approved='0'") or die(mysql_error()); 
	$match  = mysqli_num_rows($search);
	if($match > 0){
	    mysqli_query($con,"UPDATE review SET Approved='1' WHERE Answer_Id='".$Answer_Id."' AND hash='".$hash."' AND Approved='0'") or die(mysql_error());
	    echo 'The Answer has beeen Approved';// We have a match, activate the account
	}
	else{
    	echo 'The url is either invalid or you have already Approved the Review.';// No match -> invalid url or account has already been activated.
	}
}else{
    // Invalid approach
}