<?php 
$connection = mysqli_connect("localhost", "root", "", "StudentInfo");
if ($connection == true) {
    $roll = $_REQUEST["roll"];
    $name = $_REQUEST["name"];
    $marks = $_REQUEST["marks"];
    if($roll !=null && $name !=null && $marks !=null){
    $query = "insert into student values($roll,'$name',$marks)";
    mysqli_query($connection, $query);
    }
    else{
        echo"You've not give any input";
    }
    header("Location:input.php");
}
else {
    echo "Conection Fail";
}
?>