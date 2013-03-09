<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<title>CodeIgniter Login Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?=base_url();?>css/style.css" rel="stylesheet">
</head>
  <body>  
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?=base_url();?>">CodeIgniter</a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
            	<li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Account <b class="caret"></b></a>
            		<ul class="dropdown-menu dropdown-form">
                		<li>                 
                        	<form action="process.php" method="post">
                            	<fieldset>
                                	<label>Username</label>
                                    <input type="text" name="username"/>                                   
                                </fieldset>
                                <fieldset>
                                	<label>Password</label>
                                    <input type="password" name="password"/>
                                    <button type="submit" class="btn pull-right">Login</button>                                   
                                </fieldset>                     
                            </form>
                            <li class="divider"></li>            
                            <a href="<?=base_url();?>register">Help</a>                       
                        </li>                      
           			</ul>
                </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><!--/.navbar -->
    
    <div class="container">
		<div class="row">
      		<div class="span6">
            	<form class="form-register">
                    <h2 class="form-register-heading">Register</h2>
                    <input type="text" class="input-block-level" placeholder="First Name" name="fname">
                    <input type="text" class="input-block-level" placeholder="Last Name" name="lname">                 
                    <input type="text" class="input-block-level" placeholder="Email address" name="email">
                    <input type="text" class="input-block-level" placeholder="Username" name="uname">
                    <input type="password" class="input-block-level" placeholder="Password" name="pass">
                    <input type="password" class="input-block-level" placeholder="Re-Password" name="repass">
                    <button class="btn btn-large btn-primary" type="submit">Submit</button>
               	</form>            	
            </div>
      		<div class="span6">
            	<h1>Login Example</h1>
            	<p>Welcome to CodeIgniter Login Example using session</p>
            </div>
    	</div>
    </div>
    </div> <!-- /container -->
    
    <footer class="footer">
    	<div class="container">
        	<p>Copyright &copy; 2013 - <a href="http://aditya-nursyahbani.com/">Aditya Nursyahbani</a></p>
        </div>
    </footer>
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>js/jquery-1.9.1.min.js"></script>
    <script src="<?=base_url();?>js/bootstrap.min.js"></script>

  </body>
</html>
