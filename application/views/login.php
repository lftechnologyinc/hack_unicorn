<?php include_once 'includes/header.php'; ?>
<body>

    <div class="container">
<?php
	echo '<div id="header">Login</div>';
	echo form_open(current_url());
	echo form_label('Email','username');
	echo form_input('username');
	echo form_label('Password','password');
	echo form_password('password');
	echo form_label(form_checkbox('remember_me', 1).' Remember Me', 'remember_me');
	echo form_submit('login','Login');
	echo ( ! empty($error) ? $error : '' );
	echo form_close();

	echo '<div id="bottom">';
	echo '</div>';

?>
</div>
<?php include_once 'includes/footer.php'; ?>    