<?php  
                include 'Database.php';
                if(!$conn)
                {
                    die ("Error error".mysql_error());                
                }     
                if(isset($_POST['submit']))
                {
                    $Mobile =$_POST['mobile'];
                    $Pass=$_POST['pass'];
                    $sql="Select F_Id from faculty where mobile='$Mobile' and password='$Pass';";
                    $Res = $conn->query($sql);
                   if($Res=== true)
                   {
                            session_start();
                            $_SESSION['F_Id'] = $Res['F_Id'];
                            header("Location:FacultyO.php/");
                    }
                    else{
                            echo "Wrong Password Or Mobile Number";
                            header("Location:LoginF.php/");
                    }
               }
                   else
                   {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                   }
                $conn->close(); 
?>