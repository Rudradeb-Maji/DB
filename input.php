<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="main_show_input">
 
        <form action="insert.php"> <h1>Insert Data</h1>
            <div id="input">
              <div class="box">
                <label for="">Roll</label><br><br>
                <input name="roll" type="text" placeholder="Enter Roll">
              </div>
              <div class="box">
                <label for="">Name</label><br><br>
                <input name="name" type="text" placeholder="Enter Name">
              </div>
              <div class="box">
                <label for="">Marks</label><br><br>
                <input name="marks" type="text" placeholder="Enter Marks">
              </div>
                <button name="submit">Submit</button>
                <a href="index.php">Go to main</a>
            </div>
            
        </form>

    </div>
</body>

</html>