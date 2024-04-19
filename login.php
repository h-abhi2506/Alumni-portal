<?php session_start() ?>
<div class="container-fluid">
	<form action="" id="login-frm">
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="username" required="" class="form-control">
		</div>
		<div class="form-group">
		<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
								<input type="checkbox" onclick="myFunction()">Show Password
			<p style="align-items:center; text-align:center;" ><a href="index.php?page=signup" id="new_account">Create New Account</a></p>
		</div>
		<p style="text-align: center; justify-content:center; align-items: center;"><button class="button btn btn-info btn-sm">Login</button></p>
		<p style="text-align: center;" ><a href="index.php" id="reset-pswrd" ></a><a href="https://docs.google.com/forms/d/e/1FAIpQLSeu8io5fRqb3Zm3bZB41EKgUXagfJOnzfWo7d1hu5oOz0R5fg/viewform?embedded=true" width="640" height="1427" frameborder="0" marginheight="0" marginwidth="0">Reset Password</a></p>
	</div>
	</form>


<style>
	#uni_modal .modal-footer{
		display:none;
	}

	.forgot-btn{
		text-align: right;
	}

	.forgot-btn button{
		border: none;
		background-color: transparent;
		outline: none;
		font-weight: 450;
		cursor: pointer;
	}
	.forgot-popup {
		display: flex;
	}
</style>

<script>
	$('#login-frm').submit(function(e){
		e.preventDefault()
		$('#login-frm button[type="submit"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=login2',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='<?php echo isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php?page=home' ?>';
				}else if(resp == 2){
					$('#login-frm').prepend('<div class="alert alert-danger">Your account is not yet verified.</div>')
					$('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');
				}else{
					$('#login-frm').prepend('<div class="alert alert-danger">Email or password is incorrect.</div>')
					$('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>