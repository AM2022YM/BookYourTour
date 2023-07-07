<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$mnumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="INSERT INTO  tblusers(FullName,MobileNumber,EmailId,Password) VALUES(:fname,:mnumber,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mnumber',$mnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
header('location:thankyou.php');
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:thankyou.php');
}
}
?>
<!--Javascript for check email availabilty-->
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<section>
				<div class="modal-body modal-spa">
					<div class="login-right" style="width:100%;">
						<form name="signup" method="post">
							<h3 style="color:darkblue;">Create your account </h3>
								<input type="text" id="name" value="" pattern="[a-zA-Z][a-zA-Z ]{2,}" placeholder="Full Name" name="fname" autocomplete="off" required="">
								<input type="text" id="number" value="" placeholder="Mobile number" minlength="10" maxlength="10" name="mobilenumber" autocomplete="off" required="">
								<input type="email" id="email" value="" placeholder="Email id" name="email" id="email" onBlur="checkAvailability()" autocomplete="off" style="width:100%;height:5vh;margin-top:20px;"  required="">	
		 						<span id="user-availability-status" style="font-size:12px;"></span> 
								<input type="password" id="pass" value="" placeholder="Password" name="password" required="">
								<input type="password" id="cpass" name="cpassword" placeholder="confirm password"class="inp" required>	
								<input type="submit" name="submit" id="submit" value="Sign Up" style="margin-left:230px;width:100px;background-color:darkblue;">
						</form>
					</div>
					<div class="clearfix"></div>								
				</div>
			</section>
		</div>
	</div>
</div>