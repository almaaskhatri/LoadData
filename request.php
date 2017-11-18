<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "tpois";
$limitStart = $_POST['limitStart'];
$limitCount = 100;
if(isset($limitStart ) || !empty($limitStart)) {
$con = mysqli_connect($hostname, $username, $password, $dbname);
$query = "SELECT id, name,Date FROM crm_cities limit $limitStart, $limitCount";
$result = mysqli_query($con, $query);
$res = array();
while($resultSet = mysqli_fetch_assoc($result)) {
$res[$resultSet['id']] =(object) ['id' =>  $resultSet['id'] ,'name' => $resultSet['name'],'ddate' => $resultSet['Date']];

}
echo json_encode($res);
}
?>