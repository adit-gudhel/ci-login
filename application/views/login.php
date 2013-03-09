<div id="help" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpLabel" aria-hidden="true">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="helpLabel">Help</h3>
    </div> <!-- /modal-header -->
    <div class="modal-body">
    	<p>One fine body</p>
    </div> <!-- /modal-body -->
    <div class="modal-footer">
    	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div> <!-- /modal-footer -->
</div> <!-- /modal -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    	<div class="container">
        	<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
        	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        		<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          	</a>
            
          	<a class="brand" href="<?=base_url();?>">CodeIgniter</a>
          	<div class="nav-collapse collapse">
            	<ul class="nav pull-right">
            		<li class="dropdown">
                		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Account <b class="caret"></b></a>
            			<ul class="dropdown-menu dropdown-form">
                			<li><?php 
								echo form_open('signin'); 
								echo form_fieldset();
								echo form_label('Username');
								echo form_input('username');
								echo form_fieldset_close();
								
								echo form_fieldset();
								echo form_label('Password');
								echo form_password('password');
								$data = array(
									'type' => 'submit',
									'class' => 'btn pull-right',
									'content' => 'Login'
								);
								echo form_button($data);									
								echo form_fieldset_close();							                    
                            	echo form_close(); ?>
                                <li class="divider"></li>            
                                <li><a href="#help" data-toggle="modal" data-target="#help">Help</a></li>
                    		</li>                    
           				</ul>
                	</li>
            	</ul>
          	</div><!--/.nav-collapse -->
        </div><!--/container -->
	</div><!--/.navbar-inner -->
</div><!--/.navbar -->
   
<div class="container">
<?php 
	if($this->session->flashdata('msg') != ''){
		echo '
		<div class="row-fluid">
        	<div class="span12 alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$this->session->flashdata('msg').'</div>
        </div>';
	}
	if($this->session->flashdata('success') != ''){
		echo '
		<div class="row-fluid">
        	<div class="span12 alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$this->session->flashdata('success').'</div>
        </div>';
	}    
?>     	
	<div class="row-fluid"> 
      	<div class="span6">            	
        	<?php
			$data = array('class' => 'form-register');
            echo form_open('signup',$data); ?>
                <h2 class="form-register-heading">Create Account</h2>
                <?php 												
				$data = array('name' => 'fname', 'class' => 'input-block-level', 'placeholder' => 'First Name', 'value' => set_value('fname'));
				echo form_input($data);					
		
				$data = array('name' => 'lname', 'class' => 'input-block-level', 'placeholder' => 'Last Name', 'value' => set_value('lname'));
				echo form_input($data);				
				
				$data = array('name' => 'email', 'class' => 'input-block-level', 'placeholder' => 'Email Address', 'value' => set_value('email'));
				echo form_input($data);				
		
				$data = array('name' => 'uname', 'class' => 'input-block-level', 'placeholder' => 'Username', 'value' => set_value('uname'));
				echo form_input($data);					
															
				$data = array('name' => 'pass', 'class' => 'input-block-level', 'placeholder' => 'Password');
				echo form_password($data);										
				
				$data = array('name' => 'repass', 'class' => 'input-block-level', 'placeholder' => 'Re-Password');
				echo form_password($data);			
								
				$data = array(
					'type' => 'submit',
					'class' => 'btn btn-large btn-primary',
					'content' => 'Submit'
				);
				echo form_button($data);									
									                    
            echo form_close(); ?>           	
		</div> <!--/.span6 -->
      	<div class="span6">
            <h1>Login Example</h1>
            <p>Welcome to CodeIgniter Login Example using session</p>
            <?php if(validation_errors()){
                echo'<div class="row-fluid"><div class="span12 alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>'.validation_errors().'</div></div>';
            }    ?>      
        </div> <!--/.span6 -->
	</div> <!--/row -->
