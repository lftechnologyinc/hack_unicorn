<?php $this -> load -> view("includes/header.php"); ?>


<?php echo form_open('vendor/add'); ?>
    <div class="content_center">
        <legend>Add new Vendor</legend>

        <?php echo form_label('Company Name *', 'c_name'); ?>
        <?php echo form_input(array('name' => "c_name")); ?>
        
        <?php echo form_label('Addresss *', 'address'); ?>
        <?php echo form_input(array('name' => "address")); ?>
        
        <?php echo form_label('Contact Number *', 'contact'); ?>
        <?php echo form_input(array('name' => "contact")); ?>
        
        <?php echo form_label('E-mail *', 'email'); ?>
        <?php echo form_input(array('name' => "email")); ?>

        <?php echo form_label('Password *', 'password'); ?>
        <?php echo form_input(array('name' => "password")); ?>
    <br>
        
	<?php echo form_submit(array('name' => 'vendor', 'value' => 'Save', 'class' => 'btn btn-primary customBtn')); ?>
</div>
        
        




<?php $this -> load -> view("includes/footer.php"); ?>
