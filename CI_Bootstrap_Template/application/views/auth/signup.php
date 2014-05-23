<?php
$baseUrl= $this->config->item('base_url');
$attributes = array("class" => "form", "autocomplete" , "off");
echo form_open($baseUrl."/index.php/auth/login/".$formAction, $attributes); 
?>
<div class="row">
    <div class="col-md-6">
        <div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
            <?php
            $attributes = array("class"=>"form-control", "name"=>"fname", "placeholder"=>"First Name", "autofocus"=>"autofocus" );
            echo form_input($attributes);
            ?>
		</div>
    </div>
    <div class="col-md-6">
        <div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<?php
            $attributes = array("class"=>"form-control", "name"=>"lname", "placeholder"=>"Last Name");
            echo form_input($attributes);
            ?>
		</div>
    </div>
</div>
<span class="help-block"></span>
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-user"></i></span>
    <?php
    $attributes = array("class"=>"form-control", "name"=>"email", "placeholder"=>"Email Address");
    echo form_input($attributes);
    ?>
</div>
<span class="help-block"></span>
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-lock"></i></span>
    <?php
    $attributes = array("class"=>"form-control", "name"=>"password", "placeholder"=>"Password");
    echo form_password($attributes);
    ?>
</div>
<span class="help-block"></span>
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-lock"></i></span>   
	<?php
    $attributes = array("class"=>"form-control", "name"=>"re-password", "placeholder"=>"Re-enter Password");
    echo form_password($attributes);
    ?>
</div>
<span class="help-block" id="signin-error-placeholder"></span>
<?php
$attributes = array("class"=>"btn btn-success", "value"=>"Sign Un");
echo form_submit($attributes);
?>
<?php echo form_close();?>