<?php include 'linkheader_inc.php';?>
<?php include 'header_inc.php';?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!--

<form action="">
<div class="">
  <div class="col">
    <input type="text" class="form-control" id="name" placeholder="First name" aria-label="First name">
  </div><br>
  
  <div class="col">
    <input type="text" class="form-control"  id="email" placeholder="Email" aria-label="email">
  </div><br>
  <div class="col">
    <input type="number" class="form-control" id="amt" placeholder="amount" aria-label="amount">
  </div>

		  <div >
		      <input type="button" name="" id="btn" value="Pay Now" onclick="pay_now()"></input>
		  </div>
</div>
</form>
-->
 
<!-------- checkout js----------->
<style>
	.contact{
		background-image: url(images/6.jpg);
		background-repeat: no-repeat;
		background-size: 100% 100%;
		width: 100%;
		height: 100vh;
	}
</style>
<!-- payment section  start ---->
<section class="contact">
<div class="container py-5">
 <div class="row">
  <div class="col-lg-6 mx-auto">
  	<div class="card">
  		<div class="card-body">
  			<div class="row">
  				<div  class="col-lg-12">
  		<div class="contact-head text-center text-white py-3">
  		<h3>Add-website</h3>	
  		</div>			
  				</div>
  			</div>
  		<div class="p-3">	
  		<form>
  		<div class="form-row my-5">
  			<div class="col-lg-6">
  			<input type="text" class="effect-1" id="url" placeholder="https:url" aria-label="url">
  			<span class="focus-border"></span>	
  			</div>
  			<div class="col-lg-6">
  			 <input type="number" class="effect-1" id="amt" placeholder="amount" aria-label="amount">
  			<span class="focus-border"></span>	
  			</div>
  		</div>
  			<div class="form-row pb-4">
  			<div class="col-lg-12">
  		<input type="text" class="effect-1" id="web-tittle" placeholder="web-tittle" aria-label="web-tittle">
  			<span class="focus-border"></span>	
  			</div>
      </div>

      <div class="form-row pt-3">
        <div class="col-lg-12">
        <h5 style="color: #75758b; font-size: 15px;">web-Image:</h5> 
      <input type="file" class="effect-1" id="web-image" placeholder="web-image" aria-label="web-image">
        <span class="focus-border"></span>  
        </div>
      </div>

  		    <div class="form-row pt-5">
  			<div class="col-lg-12">
  		<input type="text" class="effect-1" id="web-descrption" placeholder="web-descrption" aria-label="web-descrption">
  			<span class="focus-border"></span>	
  			</div>
  		</div>
  		<div class="form-row pt-4">
  			<div class="col-lg-6">
  		<p><input type="checkbox" name="">&nbsp&nbsp i m not a robot</p>
  			</div>
  			<div class=" offset-2 col-lg-4">
  	<input type="button" name="" class="btn1" id="btn" value="Pay Now" onclick="pay_now()"></input>
  			</div>
  		</div>

  		</div>	
  			
  		</form>
  		</div>	
  		</div>
  	</div>
  </div>   
	</div>
</div>	
</section>





<script>
	
	function pay_now()
	{

		var name=jQuery('#name').val();
		var email=jQuery('#email').val();
		var amt=jQuery('#amt').val();
		
		

	var options = {
		    "key": "rzp_test_HObkbzCBmsZ62s", 
		    "amount": amt*100, 
		    "currency": "INR",
		    "name": "Smm Panel",
		    "description": "Test Transaction",
		    "image": "https://image.shutterstock.com/image-vector/fast-shopping-logo-design-stock-260nw-1262110969.jpg",
		    
		    "handler": function (response){
		      jQuery.ajax({
                  type: 'post',
                  url:  'payment_process.php',
                  data: "payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name+"&email="+email,
                  success: function(result)
                  {
                  	window.location.href="Thankyou.php";
                  }
		      });
		    }
		};
			var rzp1 = new Razorpay(options);
			 rzp1.open();
			
  

	}
</script>




<!-------- checkout js----------->