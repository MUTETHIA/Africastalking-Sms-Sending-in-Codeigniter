<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to SMS Integration</title>
        <link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
   <style type="text/css">
    .colbox {
        margin-left: 0px;
        margin-right: 0px;
    }
    </style>
<body>
<hr/>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-lg-4 col-sm-4 well">
             <?php echo $this->session->flashdata('msg'); ?>
        <?php
        $attributes = array("id" => "loginform", "name" => "loginform","autocomplete"=>"off");
        echo form_open("Welcome/sendSMS", $attributes);?>
        <fieldset>
            <legend>SMS Sending Form</legend>
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="txt_phone" class="control-label">Username</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input class="form-control" id="txt_phone" name="txt_phone" placeholder="2547....." type="text" value="<?php echo set_value('txt_phone'); ?>" />
                <span class="text-danger"><?php echo form_error('txt_phone'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
            <label for="txt_message" class="control-label">Message:</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <textarea name="txt_message" id="txt_message" cols="30" rows="3" class="form-control" ><?php echo set_value('txt_message'); ?></textarea>
                <span class="text-danger"><?php echo form_error('txt_message'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="col-lg-12 col-sm-12 text-center">
               <input id="btn_send" name="btn_send" type="submit" class="btn btn-info" value="Send SMS" />
                <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Reset" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>

        </div>
    </div>
</div>

</body>
</html>