<?php
$eroro_pass = "";
include("one.php");
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $user = $_POST['user1'];
    $pass = $_POST['pass'];

      if($user != "" && $pass != ""){
        

        $sql = "select * from log";
        $res  = mysqli_query($conn,$sql);
        if($res){
            while($row = mysqli_fetch_assoc($res)){
                $dbuser = $row['user'];
                $dbpass =$row['password'];
    
                if($dbuser == $user && $dbpass == $pass){
                    //echo "good password";
                    header("location:profileOne.php");
                }else{
                    $eroro_pass = "password or username not much";
                }
            }
        }





      }else{
          $eroro_pass = "please inser password or username";
      }
      
  
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 

  <title>log in</title>
  <link rel="shortcut icon" href="mm.jpg" type="image/x-icon">
</head>
<body>
<style> 
body{
    background: black;
}
    #form-log-one{
         margin-top: 0px;
         border: 1px solid black;
         padding: 70px;
         width: 400px;
         border-radius: 30px;
         background: white;
    }

    #form-labbel-one{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .form-control{
         border: 1px solid black;
         margin-bottom: 30px;
         border-radius: 10px;
    }
    #submit-log{
        margin-top: 10px;
        padding-left: 50px;
        padding-right: 50px;

        background:green;
        color:white;
        font-weight: bold;
        border-radius: 10px;
    }
    #submit-log:hover{
        background:white;
        color: black;
    }

</style>



<!-- log form-->

     <center style="margin-top:100px;">
     <h4 class="mt-4 text-white">log in here</h4>

        <div class="container">
        
            <form action="" method="POST" enctype="multipart/form-data" id="form-log-one">
            
              <div class="row">
                  <div class="col-12">
                    <label id="form-labbel-one" for="user">Username</label>
                    <input type="text" name="user1" class="form-control">

                  </div>

                  <div class="col-12">
                    <label id="form-labbel-one" for="pass">Password</label>
                    <input type="password" name="pass" class="form-control">

                  </div>

                  <div class="col-12">
                    
                    <input type="submit" name="submi-log" value="Log in" id="submit-log">

                  </div>

                       <p class="text-danger"> <?php echo $eroro_pass; ?></p>
              </div>

            </form>

        </div>
        
        
     </center>
    

<!-- log form end-->


  
</body>
</html>
