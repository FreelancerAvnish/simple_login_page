<?php
$conn = mysqli_connect("localhost","root","","amlfy");
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM mrlogin WHERE mr_user = '$user' AND mr_pass = '$pass';";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1)
{
    //how to fetch data
    $arr = mysqli_fetch_assoc($result);
          $user_id =  $arr['mr_id'];
        //   echo $user;
    
    session_start();
    
   $_SESSION['usename'] = $user_id;
   echo '1';

}
else{
    echo '0';
}
?>
