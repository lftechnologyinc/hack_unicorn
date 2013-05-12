<?php $this -> load -> view("includes/header.php"); ?>


<?php echo form_open('vendor/register_new'); ?>
    <div class="content_center">
        <legend>Sign Up Now</legend>

        <?php echo form_label('Full Name *', 'c_name'); ?>
        <?php echo form_input(array('name' => "c_name")); ?>
        
        <?php echo form_label('Addresss *', 'address'); ?>
        <?php echo form_input(array('name' => "address")); ?>
        
        <?php echo form_label('E-mail *', 'email'); ?>
        <?php echo form_input(array('name' => "email")); ?>

        <?php echo form_label('Password *', 'password'); ?>
        <?php echo form_input(array('name' => "password")); ?>
    <br>
        
	<?php echo form_submit(array('name' => 'consumer', 'value' => 'Save', 'class' => 'btn btn-primary customBtn')); ?>
</div>
        
        




<?php $this -> load -> view("includes/footer.php"); ?>
