
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Insert</title>
</head>

<body>
    <form  method="post" style="margin-left: 20%;
    margin-top: 10%;">
        <input type="text" name="Fname" style="width: 75%;
    border: solid 1px rgb(0, 0, 0);
    padding: 15px 10px;">
        <input type="submit" name="button1"
                value="Search" style="width: 150px;
    padding: 10px;
    margin-left: 380px;
    background: #054713;
    color: #fff;
    border: solid 1px #054713;
    cursor: pointer;
    transition:  all .38s ease-in-out;" /><br><br>
          
        
    </form>
    <?php
      
      if(isset($_POST['button1'])) {
        include_once 'main.php';
        $Fname = $_POST['Fname'];
        $result = mysqli_query($conn,"SELECT * FROM myentries WHERE FirstName ='$Fname'") or die("SELECT Error: ".mysql_error());
        $row = mysqli_fetch_array($result);
        $sno = $row['Sno'];
        $Fname = $row['FirstName'];
        $Lname = $row['LastName'];
        $Email = $row['Email'];
        $Phone = $row['Phone'];
        echo"<p>Serial Number: {$sno} </p>";
        echo"<p>First Name: {$Fname} </p>";
        echo"<p>Last Name:  {$Lname} </p>";
        echo"<p>Email Id: {$Email} </p>";
        echo"<p>Phone Number:  {$Phone} </p>";
        
     } 

    
       
        
      
?>
     
     <button onclick="window.location.href='index.html';" style="width: 150px;
        padding: 10px;
        margin-left: 684px;
        background: #054713;
        color: #fff;
        border: solid 1px #054713;
        cursor: pointer;
        transition:  all .38s ease-in-out;">New Entry</button >
  
  
</body>

</html>
