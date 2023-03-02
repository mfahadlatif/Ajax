<?php 
 $stuid=$_POST['s'];
$conn=mysqli_connect("localhost","root","","studb") or die("could not connect").mysqli_Connect_error();
$qry=mysqli_query($conn,"delete from stu_tbl where stu_id=$stuid");
if($qry){
	
	echo "1";
}else{
	echo "0";
}
?>