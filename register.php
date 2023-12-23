
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sanchalana2k20</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>
    <body>
    <?php require 'utils/header.php'; ?> 
    <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
    <form method="POST">  

   
        <label>Username:</label><br>
        <input type="text" name="usn" class="form-control" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="name" class="form-control" required><br><br>

       
       
        <label>Email:</label><br>
        <input type="text" name="email"  class="form-control" required ><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="phone"  class="form-control" required><br><br>

       

        <button type="submit" name="update" required>Submit</button><br><br>
        <a href="usn.php" ><u>Already registered ?</u></a>

    </div>
    </div>
    </div>
    </form>
    

    <?php require 'utils/footer.php'; ?>
    </body>
</html>

<?php

    if (isset($_POST["update"]))
    {
        $usn=$_POST["usn"];
        $name=$_POST["name"];
       // $branch=$_POST["branch"];
      //  $sem=$_POST["sem"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
       // $college=$_POST["college"];


        if( !empty($usn) || !empty($name) || !empty($email) || !empty($phone)  )
        {
        
            include 'classes/db1.php';     
                $INSERT="INSERT INTO participent (usn,name,email,phone) VALUES('$usn','$name','$email','$phone')";

          
                if($conn->query($INSERT)===True){
                    echo "<script>
                    alert('Registered Successfully!');
                    window.location.href='usn.php';
                    </script>";
                }
                else
                {
                    echo"<script>
                    alert(' Already registered this usn');
                    window.location.href='usn.php';
                    </script>";
                }
               
                $conn->close();
            
        }
        else
        {
            echo"<script>
            alert('All fields are required');
            window.location.href='register.php';
                    </script>";
        }
    }
    
?>