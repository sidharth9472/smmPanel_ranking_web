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

<section class="post-content-section">
<section class="post-content-section">
    <div class="container-fluid">
        <div class="row" >
          <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
          </div>
      <div  class="col-lg-12 col-md-9 col-sm-12">
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
                  <span class="details">Address</span>
                  <input type="text" name="address" placeholder=" " required>
                </div>
                <div class="rg-input">
                  <span class="details">Phone-no:</span>
                  <input type="number" name="phone_no" placeholder="+91 " required autocomplete="off">
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
                <input type="submit" name="submit" value="Update">
              </div>
              <div class="cancel-button">
                <input type="submit"  name="submit" value="Cancel">
              </div>
              </div>
            </div>
           </form>
     <!-- ============================== All Php code Start Here ============================== -->
       <?php
           include 'config.php'; 
        ?>
     <!-- ============================== All Php code  End  Here ============================== -->

         </div>
       </div>
        </section>
      </div>


<div class="col-lg-3  col-md-3 col-sm-12 ">
                    

        </div>
      </div>
       </div> <!-- /container -->
</section>
</section>


<?php include 'footer_inc.php';?>

