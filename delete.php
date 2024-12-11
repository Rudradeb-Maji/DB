<style>
    body{
        background-color: darkslategrey;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    th{
        color: blue;
        background-color: aqua;
    }
    td{
        color: indigo;
        background-color: yellow; font-weight: 600;
        text-align: center;
    }
    table,th,td{
        
       
        border:2px solid black;
    }
    table{
        width: 25%;
        margin-top: 20px;
        border-collapse: collapse;
    }
    h1,p{
        color: gold;
    }
</style>

<?php
$cond = $_REQUEST["condition"];

function printData($result)
{
    if (mysqli_num_rows($result)==null){
    echo "
    <div class='not_found'>
    <p>There is no data as per your condition</p>
    </div>
    ";
    }
    else{
    echo "<center><h1>Student</h1><table>";
    echo "<tr>";
    echo "<th>Roll</th>";
    echo " <th>Name</th>";
    echo "<th>Marks</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($result)) {
            echo "<tr> <td>$row[roll]</td> <td>$row[name]</td> <td>$row[marks]</td> </tr> ";
        }
    }
    echo "</table></center>";
}

$connection = mysqli_connect("localhost", "root", "", "StudentInfo");
if ($connection == true) {
    if(strlen($cond) >7){
    if ($cond[6] == ">" && strlen($cond) != 11) {
        $number = trim($cond, "Marks > ");
        $query = "delete from student where marks > $number";
        $result = mysqli_query($connection, $query);
        //printData($result);
    } else if ($cond[6] == "<" && strlen($cond) != 11) {
        $number = trim($cond, "Marks < ");
        $query = "delete from student where marks < $number";
        $result = mysqli_query($connection, $query);
        //printData($result);

    } else if ($cond[6] == "=") {
        $number = trim($cond, "Marks = ");
        $query = "delete from student where marks = $number";
        $result = mysqli_query($connection, $query);
        //printData($result);
    } else if ($cond[0] == "N" && $cond[strlen($cond) - 1] != " ") {
        $name = "";
        $eqpos = strpos($cond, "=");
        for ($i = $eqpos + 2; $i < strlen($cond); $i++) {
            $name .= $cond[$i];
        }
        $query = "delete from student where name = '$name'";
        $result = mysqli_query($connection, $query);
        //printData($result);
    } else if ($cond[0] == "R" && $cond[strlen($cond) - 1] != " ") {
        $roll = "";
        $eqpos = strpos($cond, "=");
        for ($i = $eqpos + 2; $i < strlen($cond); $i++) {
            $roll .= $cond[$i];
        }
        $query = "delete from student where roll = '$roll'";
        $result = mysqli_query($connection, $query);
        //printData($result);
    }
    else if ($cond[0] == "F" && $cond[strlen($cond) - 1] != " ") {
        $query = "delete from student";
        $result = mysqli_query($connection, $query);
        //printData($result);
    }
     else {
        echo "<p>Give valid condition</p>";
    }
}else {
    echo "<p>Give valid condition</p>";
}
}
?>