<?php
$sid=$_POST['sid'];
$stunme=$_POST['stunme'];
$fathernme=$_POST['fathernme'];
$fee=$_POST['fee'];
$clsid=$_POST['clsid'];
$conn=mysqli_connect("localhost","root","","studb");
$qry=mysqli_query($conn,"update stu_tbl set stu_nme='$stunme',father_nme='$fathernme',fee='$fee',cls='$clsid' where stu_id='$sid'" );

if($qry){
    echo "1";
}else{
    echo "0";
}
?>