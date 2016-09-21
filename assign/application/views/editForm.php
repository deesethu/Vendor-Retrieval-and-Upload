 <html>
 <head>
<style>
 span
 {
	color:#FF0000;
 }
 </style>
<script type="text/javascript" src="<?=base_url().'js/'?>validate.js"></script>

 </head>
 <body>
	<center><h2>EDIT FORM</h2></center>
	
	<?php
$attributes = array('onsubmit'=>"return validate(this)");
echo form_open('welcome/update', $attributes);
?>
	<input type="hidden" value="<?php echo $sno?>" name="sno" id="oname" />
		<center>
			<table cellpadding="10px">
				<tr>
					<td><label> NAME:</label></td>
					<td><input type="text" value="<?php echo $name?>" name="name" id="name" /></td>
					<td><span id="realnameerror" ></span></td>
				</tr>
				<tr>
					<td><label> PASSWORD:</label></td>
					<td><input type="password" value="<?php echo $pwd?>" name="pwd" id="pwd" /></td>
					<td><span id="passworderror" ></span></td>
				</tr>
				<tr>
					<td><label>CONFIRM PASSWORD:</label></td>
					<td><input type="password" value="<?php echo $pwd?>" name="pwd2" id="pwd2" /></td>
					<td><span id="password2error" ></span></td>
				</tr>
				<tr>
					<td><label> EMAIL:</label></td>
					<td><input type="text" value="<?php echo $email?>" name="email" id="email" /></td>
					<td><span id="emailerror" ></span></td>
				</tr>
				<tr>
					<td><label> MOBILE:</label></td>
					<td><input type="text" value="<?php echo $mobile?>" name="mobile" id="mobile" /></td>
					<td><span id="phonenoerror" ></span></td>
				</tr>
				<tr>
					<td><label> SERVICE TAX NUMBER:</label></td>
					<td><input type="text" value="<?php echo $stn?>" name="stn" id="stn" /></td>
					<td><span id="taxnoerror" ></span></td>
				</tr>
				<tr>
					<td><label> TAX PERCENTAGE:</label></td>
					<td><input type="text" value="<?php echo $tper?>" name="tper" id="tper" /></td>
					<td><span id="taxpnoerror" ></span></td>
				</tr>
				<tr>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="SUBMIT" /></td>
				</tr>
			</table>
		</center>
		 <?php echo form_close(); ?> 

 </body>
 </html>
 
 