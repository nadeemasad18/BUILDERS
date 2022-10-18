<body>
<div class="container h-100">
        <div class="login_name_wrapper">
        </div>
    <div class="d-flex justify-content-center h-50" >
        <div class="user_card">
            <div class="d-flex justify-content-center">
				<h1>Verify Code</h1>
            </div>
			<p class="text-center text-muted">Enter the verification code we sent to your email</p>

            <div class="d-flex justify-content-center form_container">
                <form style="width: 320px" method="POST">
                    <?php 
                    if(isset($no_user)){
                        echo $no_user;
                    }
                    else if(isset($err)){
                        echo $err;
                    }
                    else if(isset($wrong_code)){
                        echo $wrong_code;
                    }
                    ?>
                    <div class="input-group mb-3">
                        <input name="code" type="text" class="form-control input_user" placeholder="Enter Verification code">
                    </div>
                    <small class="text-danger"><?php echo form_error('code', '<i class="fa fa-exclamation-circle"></i>');?></small>

                    <div class="d-flex justify-content-center login_container">
                        <button type="submit" name="button" class="btn login_btn">Send Request</button>
                    </div>
                </form>
            </div>
            <div class="mt-2">
                <div class="d-flex justify-content-center links"><a href="signin">Back to login</a> </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>