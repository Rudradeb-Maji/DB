<style>
    body{
        background-color: darkslategrey;
        font-family: Verdana, Geneva, Tahoma, sans-serif ;
    }
    th{
        color: blue;
        background-color: aqua;
    }
    td{
        color: royalblue;
        background-color: yellow; font-weight: 550;
        text-align: center;
    }
    table,th,td{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
       
        border:2px solid black;
    }
    table{
        width: 25%;
        margin-top: 20px;
        border-collapse: collapse;
    }
    h1,div{
        color: gold;
    }
    a{
    background-color: white;
    margin: 20px;
    padding:10px 0px 10px 0px;
    text-align: center;
    text-decoration: none;
    border-radius: 30px;
    font-family:Verdana, Geneva, Tahoma, sans-serif ;

    }
</style>
<?php
$connection = mysqli_connect("localhost", "root", "", "StudentInfo");
if ($connection == true) {
        $query = "select * from student";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result)==null){
            echo "
            <center>
            <div>
            <p>Table is blank</p>
            </div></center>
            ";
            
        }
        else{
        echo "<center><h1>Student</h1><table>
         <tr>
         <th>Roll</th>  
         <th>Name</th>
         <th>Marks</th>
         </tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr> <td>$row[roll]</td> <td>$row[name]</td> <td>$row[marks]</td> </tr> ";
        }
        echo "</table></center>";
        }
        echo"<a href='index.php'>Go to main</a>";
    }
else {
    echo "Conection Fail";
}
