<?php include_once 'includes/header.php'; ?>
<body>

    <div class="container">
<?php
	echo '<div id="header">BitAuth Example: Login</div>';

	echo form_open(current_url());
	echo form_label('Username','username');
	echo form_input('username');
	echo form_label('Password','password');
	echo form_password('password');
	echo form_label(form_checkbox('remember_me', 1).' Remember Me', 'remember_me');
	echo form_submit('login','Login');
	echo ( ! empty($error) ? $error : '' );
	echo form_close();

	echo '<div id="bottom">';
	echo '<span style="float: right;">'.anchor('base/register', 'Register').'</span>';
	echo '</div>';

?>
</div>
</body>
</html>
