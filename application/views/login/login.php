<body>
<div class="container h-100">
        <div class="login_name_wrapper">
        </div>
    <div class="d-flex justify-content-center h-50" >
        <div class="user_card">
            <div class="d-flex justify-content-center">
				<h1>Realtor Login</h1>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form style="width: 320px" method="POST">
				<?php 
					if(isset($no_user)){
						echo $no_user;
					}
					else if(isset($incorrectPwd)){
						echo $incorrectPwd;
					}
                    else if(isset($pwd_updated)){
                        echo $pwd_updated;
                    }
					?>
                    <div class="row mb-3">
                        <input name="email" type="text" class="form-control input_user" placeholder="realtoremail@example.com" >
						<small class="text-danger"><?php echo form_error('email');?></small>
					</div>
                    <div class="row mb-4">
                        <input name="password" type="password" class="form-control input_password" placeholder="*********">
						<small class="text-danger"><?php echo form_error('password');?></small>
					</div>

                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn">Login</button>
                    </div>
                </form>
            </div>
            <div class="mt-2">
                <div class="d-flex justify-content-center links"><a href="forgot_pwd">Forgot your password?</a> </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>