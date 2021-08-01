<?php include 'linkheader_inc.php';?>
<?php include 'header_inc.php';?>

<style>
  .review-img{
  background-image: url(images/website.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}

</style>
<section class="page-title" style="background-image: url(images/user-panel.jpg);">
  <div class="auto-container">
    <div class="content">
      <h1>user <span>sign up</span></h1>
      <ul class="page-breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li style="letter-spacing: 2px;">&#62&#62add user</li>
        </ul>
    </div>
  </div>
</section>
<section class="post-content-section">
<section class="post-content-section">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
            </div>
<div  class="col-lg-9 col-md-9 col-sm-12">
  <!--input registration section --->
  <section>
    <div class="registration-form">
   <div class="container registration">
     <div class="rg-tittle">Registration</div>

     <form  action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
       <div class="rg-details">
          <div class="rg-input">
            <span class="details">Full name</span>
             <input type="text" name="name" placeholder="enter full name " required>
          </div>
           <div class="rg-input">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="abc123@.com " required>
          </div>
          <!--  -->
          <div class="rg-input">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder=" " required>
          </div>
          <div class="rg-input">
            <span class="details">Phone-no:</span>
            <input type="number" name="phone_no" placeholder="+91 " required autocomplete="off">
          </div>
          <div class="rg-input">
            <span class="details">Username</span>
            <input type="varchar" name="user_name" placeholder="name@123 " required>
          </div>
          <div class="rg-input">
            <span class="details">Create password</span>
            <input type="password" name="password" placeholder="must be in 6 charcter " required>
          </div>
          <div class="rg-input">
            <span class="details">Confirm password</span>
            <input type="password" name="c_password" placeholder="abc123@.com " required>
          </div>
          <div class="rg-input">
            <span class="details">URL:</span>
            <input type="text" name="url" placeholder="" required>
          </div>
          <div class="rg-input">
            <span class="details">Web-Tittle</span>
            <input type="text" name="web_tittle" placeholder=" " required>
          </div>
          <div class="rg-input">
            <span class="details">web-discrption</span>
            <input type="text" name="web_description" placeholder=" " required>
          </div>
          <div class="rg-input">
            <span class="details">Web-shortpic</span>
             <input type="file" name="fileToUpload" class="form-control">
          </div>

           <div class="rg-button">
          <input type="submit" name="submit" value="register">
        </div>
      </div>
     </form>
     <!-- ============================== All Php code Start Here============================== -->
           <?php 
            if(isset($_POST["submit"])) {
            include "config.php";
            $target_dir = "upload/";
            $fileName = basename($_FILES["fileToUpload"]["name"]);
            $target_file = $target_dir . $fileName;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          // Allow certain file formats
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }

          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
              // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.  "."<br>";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }


         $name =mysqli_real_escape_string($conn, $_POST['name']);
         $email =mysqli_real_escape_string($conn, $_POST['email']);
         $address =mysqli_real_escape_string($conn, $_POST['address']);
         $phone_no =mysqli_real_escape_string($conn, $_POST['phone_no']);
         $url =mysqli_real_escape_string($conn, $_POST['url']);
         $web_tittle =mysqli_real_escape_string($conn, $_POST['web_tittle']);
         $web_description =mysqli_real_escape_string($conn, $_POST['web_description']);
         $user_name =mysqli_real_escape_string($conn, $_POST['user_name']);

         $sql1 = "SELECT `user_name` FROM `all-user` WHERE `user_name`='{$user_name}'";
         $sql2 = "SELECT `email` FROM `all-user` WHERE `email`='{$email}'";
         $result = mysqli_query($conn,$sql1) or die("query failed");
         $result2 = mysqli_query($conn,$sql2) or die("query failed");

         if (mysqli_num_rows($result) != 0) {
           echo "Username Already Exist.";
         }elseif (mysqli_num_rows($result2) != 0) {
           echo "Email Already Used."."<br>";
         }
         else{
           $password = md5($_POST['password']);
           $c_password = md5($_POST['c_password']);
           if ($password != $c_password) {
            echo "Password doesn't match.";
           }else
           $sql= "INSERT INTO `all-user`(`name`, `email`,`address`, `phone_no`, `user_name`, `password`, `url`, `web_tittle`, `web_description`, `web_pic`) VALUES ('{$name}','{$email}','{$address}','{$phone_no}','{$user_name}','{$password}','{$url}','{$web_tittle}','{$web_description}','{$fileName}')";
              
           $result= mysqli_query($conn,$sql) or die("sql query failed.");   

           mysqli_close($conn);
         }
     }
   ?> 
     <!-- ============================== All Php code  End  Here ============================== -->

   </div>
 </div>
  </section>
<section>
<div class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="section-head col-sm-12">
      <h4><span>let see how</span> its</h4>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris </p>        
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="item">
          <span class="iconic feature_box_col_one">
           <i class="fas fa-chart-line" style=" width: 30%;"></i></span>
           <h6>Ranking</h6>
           <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud...o</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="item">
          <span class="iconic feature_box_col_two">
          <i class="fas fa-igloo" style=" width: 30%;"></i></span>
           <h6>Add website</h6>
           <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud...o</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="item">
          <span class="iconic feature_box_col_three">
          <i class="fab fa-internet-explorer" style=" width: 30%;"></i></span>
           <h6>website Host</h6>
           <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud...o</p>
        </div>
      </div>

      <div class="col-md-12 col-sm-12 review-img">
        <div class="section-head col-sm-12 mt-5">
      <h4 ><span class="text-light">website</span>format</h4>
      </div>
        <div class="row" style="padding: 4rem;">
        <div class="col-md-4 col-sm-6 "> 
            <div class="service-box">
                <div class="service-icon">
                    <div class="front-content">
                      <img src="images/d-1.jpg" alt="1" class="img-fluid">
                        <h3>design</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>design</h3>
                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon ">
                    <div class="front-content">
                          <img src="images/d-2.jpg" alt="1" class="img-fluid">
                        <h3>design</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>design</h3>
                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon">
                    <div class="front-content">
                        <img src="images/d-3.jpg" alt="1" class="img-fluid">
                        <h3>design</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>design</h3>
                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                </div>
            </div>
        </div>
            
        </div>
    </div>
  </div>
</div>     

  </section>

</div>


<div class="col-lg-3  col-md-3 col-sm-12 ">
      <?php include 'sidebar_inc.php';?>               

        </div>
      </div>
       </div> <!-- /container -->
</section>
</section>


<?php include 'footer_inc.php';?>

