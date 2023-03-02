<?php 
$conn=mysqli_connect("localhost","root","","studb") or die("could not connect").mysqli_Connect_error();
$getclasses=mysqli_query($conn,"select * from class_tbl order by cls_id");
if(mysqli_num_rows($getclasses)>0){
	$opt="";
	while ($row=mysqli_fetch_assoc($getclasses)) {
		$opt.="<option value='{$row['cls_id']}'>{$row['cls_nme']}</option>";
	}
	echo $opt;
}else{
	echo "0";
}
?>