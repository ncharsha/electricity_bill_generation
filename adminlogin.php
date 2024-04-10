<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $invalid = false;
    if($email=="example@gmail.com" && $pass == "1234"){
        //echo $email;
        //echo $pass;
        echo "<script>window.location.href='admin/index.php'</script>";
    }
    else{
        $invalid = true;
    }
}
include './header.php';
?>
<style>
    #csard{
        border:1px solid black;
        border-radius:4px;
        background-color:;
    }
</style>
<div class="card w-50 my-5"  id="card" style="margin:auto">
<div class="card-header" style="text-align:center">
    Admin Login
  </div>
  <div class="card-body ">
<form action="adminlogin.php" method="post">
    <?php
    if(isset($_POST['submit'])){
        if($invalid == true){
            echo "<div class='p-1 mb-2 bg-danger text-white'>Invalid Email or Password</div>";
        }
    }
    ?>
    <!--

-->
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password" required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me !</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>
</div>
</div>
<?php
include './aboutus.php';
?>