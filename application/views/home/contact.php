<body style="background: url('<?php echo base_url();?>Builders/builders/builders/images/img-noice.avif'); background-size: cover; background-repeat: no-repeat;">
<div id="fh5co-main">
<div class="fh5co-narrow-content animate-box fadeInLeft animated" data-animate-effect="fadeInLeft" style="background: url('https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NHx8fGVufDB8fHx8&w=1000&q=80'); background-size: cover; background-repeat: no-repeat; margin-top: 90px;">
				
				<div class="row justify-content-center" style="margin-top: 200px;">
					<div class="col-md-4 col-md-offset-1">
						<h1 class="text-white float-end" style="font-size: 55px; font-weight: 900;">Contact US</h1>
    
					</div>
                    <?php 
                        if(isset($notification_sent)){
                            echo $notification_sent;
                        }
                        ?>
				</div>
        <br /><br />
				<form method="POST" autocomplete="off">
					<div class="row justify-content-center">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group m-3">
										<input type="text" name="txtName" class="form-control" placeholder="Name" value="<?php echo set_value('txtName');?>">
                                        <small class="text-white fw-bold"><?php echo form_error('txtName');?></small>

                                    </div>
									<div class="form-group m-3">
										<input type="text" name="txtEmail" class="form-control" placeholder="Email" value="<?php echo set_value('txtEmail');?>">
                                        <small class="text-white fw-bold"><?php echo form_error('txtEmail');?></small>

									</div>
									<div class="form-group m-3">
										<input type="text" name="txtPhone" class="form-control" placeholder="Phone" value="<?php echo set_value('txtPhone');?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group m-3">
										<textarea name="txtMsg" id="message" cols="30" rows="7" class="form-control" placeholder="Message" value="<?php echo set_value('txtMsg');?>"></textarea>
                                        <small class="text-white fw-bold"><?php echo form_error('txtMsg');?></small>

                                    </div>
									<div class="form-group m-3">
										<input type="submit" class="btn btn-primary btn-lg" value="Send Message">
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</form>
			</div>
</div>
</body>