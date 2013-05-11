<?php $this -> load -> view("includes/header.php"); ?>

<?php echo form_open('vendor/update'); ?>
    <div class="content_center">

	<legend>Add new Vehicle</legend>
        
        <?php echo form_label('Vehicle Type *', 'v_type'); ?>
        <?php $options = array(
                  '1'  => 'Bus',
                  '2'    => 'Micro',
                  '3'   => 'Car/Jeep',
                  );
                echo form_dropdown('v_type', $options); ?>
        
        <?php echo form_label('Vehicle Number *', 'v_number'); ?>
        <?php echo form_input(array('name' => "v_number")); ?>
        
        <?php echo form_label('From *', 'from'); ?>
        <?php $options = array(
                  '1'  => 'Kathmandu',
                  '2'    => 'Pokhara',
                  '3'   => 'Hetauda',
                  '4' => 'Biratnagar',
                );
                echo form_dropdown('from', $options);?>
        
        <?php echo form_label('To *', 'to'); ?>
        <?php $options = array(
                  '1'  => 'Kathmandu',
                  '2'    => 'Pokhara',
                  '3'   => 'Hetauda',
                  '4' => 'Biratnagar',
                );
                echo form_dropdown('to', $options); ?>
    <br>
        
        
	<?php echo form_submit(array('name' => 'vendor', 'value' => 'Save', 'class' => 'btn btn-primary customBtn')); ?>
    <div>
        
        




<?php $this -> load -> view("includes/footer.php"); ?>
