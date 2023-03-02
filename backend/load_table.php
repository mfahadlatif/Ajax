<?php 
$conn=mysqli_connect("localhost","root","","studb");
$qry=mysqli_query($conn,"select s.*,c.cls_nme from stu_tbl s,class_tbl c where c.cls_id=cls order by stu_id desc ");
if(mysqli_num_rows($qry)>0){
	$tbl="<table style='overflow: scroll;'>
	<thead>
	<tr>
	<th>Stu ID</th>
	<th>Stu Name</th>
	<th>Father Name</th>
	<th>fee</th>
	<th>class</th>
	<th>Delete</th>
	</tr>
	</thead>
	<tbody>";
	$rws=mysqli_num_rows($qry);
	while($row=mysqli_fetch_assoc($qry)){
		$tbl.="
		<tr>
		<td>{$row['stu_id']}</td>
		<td>{$row['stu_nme']}</td>
		<td>{$row['father_nme']}</td>
		<td>{$row['fee']}</td>
		<td>{$row['cls_nme']}</td>
		<td style='text-align:center'><button class='del_btn' data-id='{$row['stu_id']}'>Delete</button><button class='up_btn' data-id='{$row['stu_id']}'>Update</button></td>
		</tr>";
	}
	$tbl.="</tbody>
	</table>";
	$tbl.="<caption><small> Total Rows are : ${rws} </small></caption> ";
	echo $tbl;
}
else{
	echo "<h1>No row against given query</h1>";
}
	
?>