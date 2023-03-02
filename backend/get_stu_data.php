<?php
$stuid=$_POST['s'];
$conn=mysqli_connect("localhost","root","","studb");
$qry=mysqli_query($conn,"select s.*,c.cls_nme from stu_tbl s,class_tbl c where c.cls_id=cls and 
stu_id=$stuid order by stu_id desc");
$row=mysqli_fetch_assoc($qry);
if(mysqli_num_rows($qry)>0){
    echo json_encode($row);
}else{
    echo "0";
}
?>