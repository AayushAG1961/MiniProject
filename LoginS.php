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
                    $sql="Select Stu_Id from student where mobile='$Mobile' and password='$Pass';";
                    $Res = $conn->query($sql);
                   if($Res===true)
                   {
                    session_start();
                    $_SESSION['Stu_Id'] = $Res['Stu_Id'];
                    header("Location:/MiniProject2/ViewA.php");
                    }
                    else{
                        echo "Wrong Password Or Mobile Number";
                        header("Location:/MiniProject2/LoginS.php");
                    }
                   }
                   else
                   {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                   } 
                $conn->close(); 
 ?>