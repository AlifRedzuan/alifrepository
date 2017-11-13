 <?php
 
 $sql_query= " UPDATE `proposalform` LEFT JOIN users ON proposalform.regID=users.id
				SET `status` = '$status'
				WHERE proposalform.studentid = '" . $_SESSION['userid'] . "'";
				
				
				
if(mysqli_query($con,$sql_query))
{
echo"<h3>data update</h3>";
?>