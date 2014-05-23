<?php
$projectName = $this->config->item('project_name');
$baseUrl= $this->config->item('base_url');
if(!isset($projectName) || $projectName == "") $projectName = "CI & Bootstrap";
?>
<div class="navbar navbar-fixed-top navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $baseUrl; ?>"> <?php echo $projectName; ?> </a>
		</div>
		<div class="navbar-collapse collapse">
            <div class="navbar-form navbar-right"> 
			<!--<form action="<?=$baseUrl?>index.php/auth/login/authenticate?login" method="post" class="navbar-form navbar-right"  role="form">-->
				<!--<div class="form-group">
					<input type="text" placeholder="Email" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" class="form-control">
				</div>-->
                <div class="form-group">
                    <a class="btn btn-primary" href="<?=$baseUrl?>/index.php/auth/login">Login</a>
                </div>

				<!--<button type="submit" class="btn btn-social btn-google-plus"><i class="fa fa-google"></i> Sign in with Google</button>-->
			<!--</form>-->
            </div>
		</div><!--/.navbar-collapse -->
	</div>
</div>	