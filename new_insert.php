<!DOCTYPE html>
<html>
<head>
	<title>new insert</title>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		justify-content: center;
		align-items: center;
		display: flex;
		height: 100vh;
	}
	.parent{
		width: 70%;

	}
	.child table{
		width: 100%;
		border-collapse: collapse;
	}
	td,th{
		border: 1px solid #ddd ;
		padding: 8px;
	}
	#get_data{
		width: 20%;
		margin: 10px 0 0 0;
		padding: 8px;
	}
	
thead tr{
	background-color: #333;
	color: white;
}
tbody tr:nth-child(even){
	background-color: #eee;
}
tbody tr:hover{
	color: blue;
}

h1{
	font-family: arial;
}	
.frm{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	padding: 10px 0 10px 0;
}
.frm div{
 width: 70%;
 margin: 10px 0 0 0;
}
.frm label{
	flex:1;
}
.frm input,select{
	flex: 6;
	padding: 8px;
}
.frm div{
	display: flex;
	justify-content: flex-end;
}
form{
	display: flex;
	justify-content: center;
	flex-direction: column;
	align-items: center;
	width: 100%
}
.frm div>button{
	width: 20%;
	padding: 8px;
}
.del_btn{
	background-color: red;
	padding: 4px 10px;
	border:0;
	border-radius: 3px;
	color: white;
	margin-right: 5px;
	cursor:pointer; 
}
.up_btn{
	background-color: lightblue;
	padding: 4px 10px;
	border: 0;
	border-radius: 3px;
	color: blue;
	cursor: pointer; 
}
</style>
<body>
	<div class="parent">
		<div class="frm"> 
		<div id="success_msg"></div>
		<div id="error_msg"></div>
		<h1>Add new student</h1>
		<form action="">
				<div>
					<label for="">Student  id</label>
					<input type="text" name="" id="stu_id">
				</div>	
				<div>
					<label for="">Student  Name</label>
					<input type="text" name="" id="stu_nme">
				</div>		
				<div>
					<label for="">Father Name</label>
					<input type="text" name="" id="father_nme">
				</div>	<div>
					<label for="">fee</label>
					<input type="text" name="" id="fee">
				</div>	<div>
					<label for="">class</label>
					<select name="" id="clsid"></select>
				</div>		
				<div><button id="insert_new">Insert New</button>
				<button id="up_rec">Update data</button></div>


		</form>
		</div>
		<div class="child"></div>
	<!-- 	<button id="get_data">Get Data</button> -->
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script >
		$(document).ready(function(){
getclasses();
		 function getclasses(){
				$.ajax({

				url:"backend/get_classes.php",
				type:"POST",
				success:function(d){
							if(d==0){
							$("#error_msg").html("Could not load table").slideDown();
							$("#success_msg").slideUp();
							}
							else{
							$("#clsid").html(d);
							}
			}

				})
		 }
			
		})
	</script>
</body>
</html>