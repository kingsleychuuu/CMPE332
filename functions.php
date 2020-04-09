<?PHP
function print_selection(){
	$servername='localhost';
	$username="root";
	$password="";
	$dbname="my_db";
	//build connection
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("connect failed".$connect_error);
	}
	//sql query
	$sql="select * from grid";
	//run the query
	$result=$conn->query($sql);
	if($result->num_rows>0){//check the query
		while ($row=$result->fetch_assoc()) {
			echo'<option value="'.$row["keyword"].'">'.$row["keyword"].'</option>'//out put the selection option
		}
	}
}


?>