<?php 
$time_options = [
	'0000' => '12:00 AM',
	'0030' => '12:30 AM',
	'0100' => '1:00 AM',
	'0130' => '1:30 AM',
	'0200' => '2:00 AM',
	'0230' => '2:30 AM',
	'0300' => '3:00 AM',
	'0330' => '3:30 AM',
	'0400' => '4:00 AM',
	'0430' => '4:30 AM',
	'0500' => '5:00 AM',
	'0530' => '5:30 AM',
	'0600' => '6:00 AM',
	'0630' => '6:30 AM',
	'0700' => '7:00 AM',
	'0730' => '7:30 AM',
	'0800' => '8:00 AM',
	'0830' => '8:30 AM',
	'0900' => '9:00 AM',
	'0930' => '9:30 AM',
	'1000' => '10:00 AM',
	'1030' => '10:30 AM',
	'1100' => '11:00 AM',
	'1130' => '11:30 AM',
	'1200' => '12:00 PM',
	'1230' => '12:30 PM',
	'1300' => '1:00 PM',
	'1330' => '1:30 PM',
	'1400' => '2:00 PM',
	'1430' => '2:30 PM',
	'1500' => '3:00 PM',
	'1530' => '3:30 PM',
	'1600' => '4:00 PM',
	'1630' => '4:30 PM',
	'1700' => '5:00 PM',
	'1730' => '5:30 PM',
	'1800' => '6:00 PM',
	'1830' => '6:30 PM',
	'1900' => '7:00 PM',
	'1930' => '7:30 PM',
	'2000' => '8:00 PM',
	'2030' => '8:30 PM',
	'2100' => '9:00 PM',
	'2130' => '9:30 PM',
	'2200' => '10:00 PM',
	'2230' => '10:30 PM',
	'2300' => '11:00 PM',
	'2330' => '11:30 PM',
];
?>
<label class="customizer-field" for="<?php echo $input_name ?>"><?php echo $input_description ?><?php echo $required_label ?>
	<select name="<?php echo $input_name ?>" value="<?php echo $input_value ?>"<?php echo $required_input ?>>
		<option disabled selected value>Please Select</option>
		<?php foreach($time_options as $value => $time) : ?>
			<option value="<?php echo $value ?>" <?php echo ($value == $input_value) ? ' selected="selected"' : '' ?>><?php echo $time ?></option>
		<?php endforeach ?>
	</select>
</label>