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
                		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><?= $this->session->userdata('username'); ?> <b class="caret"></b></a>
            			<ul class="dropdown-menu dropdown-form">                	
                    		<li><a href="<?=base_url();?>user/detail">View Account Detail</a></li>
                        	<li class="divider"></li>
                        	<li><a href="<?=base_url();?>signout">Logout</a></li>               
           				</ul>
                	</li><!--/.dropdown -->
            	</ul>
          	</div><!--/.nav-collapse -->
		</div><!--/.container -->
	</div><!--/.navbar-inner -->
</div><!--/.navbar -->
<div class="container">
	<div class="row">
    	<div class="span12">
        	<div class="hero-unit">
            	<h1>Home</h1>
                <p>Welcome <strong><?=$this->session->userdata('username');?></strong>,<br/>This is the main user area.</p>
            </div><!--/.hero-unit -->
        </div><!--/.span12 -->
	</div><!--/.row -->