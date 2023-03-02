<!DOCTYPE html>
<html>
<head>
	<title>get data</title>
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
</style>
<body>
	<div class="parent">
		<div id="success_msg"></div>
		<div id="error_msg"></div>
		<h1>Ajax Data Loading</h1>
		<div class="child"></div>
		<button id="get_data">Get Data</button>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#get_data").click(function(){
				$.ajax({
					url:"backend/load_table.php",
					type:"POST",
					success: function(d){
						$(".child").html(d);
					}
				})
			})
		})
	</script>
</body>
</html>