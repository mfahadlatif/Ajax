<?php 
$stuid=$_POST['stuid'];
$stunme=$_POST['stunme'];
$fathernme=$_POST['fathernme'];
$fee=$_POST['fee'];
$clsid=$_POST['clsid'];
$conn=mysqli_connect("localhost","root","","studb");
$qry=mysqli_query($conn,"insert into stu_tbl(stu_id,stu_nme,father_nme,fee,cls) value('$stuid','$stunme','$fathernme','$fee','$clsid')");
if($qry){
	echo "1";
}else{
	echo "0";
}
?>