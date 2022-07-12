<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/header.css">
</head>
<header>
	<?php
	if($this->session->userdata('userid') != null){
		$data = $this->session->userdata('username');
	?>
	<div class="logout_box">
		<span class="user_name"><b><?=$data?></b> 님</span> |
		<span class="logout"><a href="<?php echo base_url();?>/login/logout" class="logout_btn"><b>LOGOUT</b></a></span>
	</div>
	<?php	
	}
	?>
  	<div class="header">
  	</div>
</header>

</html>