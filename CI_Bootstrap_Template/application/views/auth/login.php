<?php
$baseUrl= $this->config->item('base_url');
$attributes = array("class" => "form", "autocomplete" , "off");
echo form_open($baseUrl."/index.php/auth/login/".$formAction, $attributes);
?>
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-user"></i></span>
	<?php
    $attributes = array("class"=>"form-control", "name"=>"username", "placeholder"=>"Email Address", "autofocus"=>"autofocus");
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
<span class="help-block" id="signin-error-placeholder"></span>
<?php
$attributes = array("class"=>"btn btn-primary", "value"=>"Login");
echo form_submit($attributes);
?>
<?php echo form_close();?>