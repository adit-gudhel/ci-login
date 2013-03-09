<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?=base_url();?>user">CodeIgniter</a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
            	<li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><?= $account['username']; ?> <b class="caret"></b></a>
            		<ul class="dropdown-menu dropdown-form">
                		<li>
                        	<li><a href="<?=base_url();?>user/detail">View Account Detail</a></li>
                            <li class="divider"></li>
                            <li><a href="<?=base_url();?>signout">Logout</a></li>            
                                                   
                        </li>                      
           			</ul>
                </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><!--/.navbar -->
    
    <div class="container">
		<div class="row-fluid">        	
      		<div class="span12">
                 	<div class="hero-unit">
                    	<h1><?= ucfirst($account['first_name']); ?> <?= ucfirst($account['last_name']); ?></h1>
                        <p><?= $account['username']; ?></p>
                    </div>
            </div>            
    	</div>
        <div class="row-fluid">
        	<div class="span12">
            	<legend>Your Account Detail :</legend>
                <div class="row-fluid">
                	<div class="span8">
                    	<ul class="nav nav-tabs">
                          <li class="active"><a href="#fname" data-toggle="tab">First Name</a></li>
                          <li><a href="#lname" data-toggle="tab">Last Name</a></li>
                          <li><a href="#email" data-toggle="tab">Email Address</a></li>                  
                        </ul>          	
                     
                        <div class="tab-content">
                          <div class="tab-pane active" id="fname"><p><?= $account['first_name']; ?></p></div>
                          <div class="tab-pane" id="lname"><p><?= $account['last_name']; ?></p></div>
                          <div class="tab-pane" id="email"><p><?= $account['email_address']; ?></p></div>                       
                        </div>
                    </div>
                    <div class="span4">
                    	<p class="text-center"><img class="img-circle" width="140" height="140" src="<?= base_url('img/'.$account['photo'].''); ?>"</p>
                    </div>
                </div>            	                           	
            </div>
		</div>
