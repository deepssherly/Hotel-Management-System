<?php 
$conn = mysqli_connect('localhost','deeps','deepthi','hotel','3307');
if(!$conn)
{
    echo "connection error : ".mysqli_connect_error();
}
?>