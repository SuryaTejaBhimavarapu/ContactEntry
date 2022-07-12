<?php
include_once 'main.php';

     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
    

     $phone = $_POST['phone'];
     if($fname!="" && $lname!="" && $email!="" && $phone!="" ){
        $sql = "INSERT INTO myentries (FirstName,LastName,Email,Phone)
        VALUES ('$fname','$lname','$email','$phone')";
        
        if (mysqli_query($conn, $sql)) {
           echo "New record has been added successfully !";
        } else {
           echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
     }
    else{
        echo"All fields are mandatory";
    }
     mysqli_close($conn);
    

?>
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
  <button onclick="window.location.href='index.html';">Click Here to make a new entry</button>
  </body>
    </form>
    </div>
</body>
</html>
