<?php
	$updateMsg = "";

	if ( !empty( $_POST ) && check_admin_referer( 'hc_rse_update_options' , 'hc_rse_update_options' ) )
	{
		//Do date
	    if( isset( $_POST['hc_rse_date_format'] ) && $_POST['hc_rse_date_format'] != "" ){
			update_option( 'hc_rse_date_format' , $_POST['hc_rse_date_format'] );
			$updateMsg = __( "Options Updated" , 'hc_rse' );
	    }

		//Do time
		if( isset( $_POST['hc_rse_time_format'] ) && $_POST['hc_rse_time_format'] != "" ){
		   update_option( 'hc_rse_time_format' , $_POST['hc_rse_time_format'] );
		   $updateMsg = __( "Options Updated" , 'hc_rse' );
	    }

	    //Do more info link
		if( isset( $_POST['hc_rse_more_info_link'] ) && $_POST['hc_rse_more_info_link'] != "" ){
		   update_option( 'hc_rse_more_info_link' , $_POST['hc_rse_more_info_link'] );
		   $updateMsg = __( "Options Updated" , 'hc_rse' );
	    }

	    //Do hide info link
		if( isset( $_POST['hc_rse_hide_info_link'] ) && $_POST['hc_rse_hide_info_link'] != "" ){
		   update_option( 'hc_rse_hide_info_link' , $_POST['hc_rse_hide_info_link'] );
		   $updateMsg = __( "Options Updated" , 'hc_rse' );
	    }

	    //Do view all events
		if( isset( $_POST['hc_rse_view_events_link'] ) && $_POST['hc_rse_view_events_link'] != "" ){
		   update_option( 'hc_rse_view_events_link' , $_POST['hc_rse_view_events_link'] );
		   $updateMsg = __( "Options Updated" , 'hc_rse' );
	    }
	}
?>

<div class="wrap">
	<h2><?php _e( 'Really Simple Event Settings' , 'hc_rse' ); ?></h2>
	<?php if($updateMsg != ""): ?>
		<div class="updated">
			<p><?php echo $updateMsg; ?></p>
		</div>
	<?php endif; ?>

	<p><?php _e( 'Not sure what to do? ' , 'hc_rse' ); ?> <a href="#help"><?php _e( 'Click here for more info' , 'hc_rse' ); ?></a></p>
	<div id="format-help" class="hidden">
		<p><?php _e( 'You change change the format for the date and time via these options.  This is how it will appear when you use the plugin short-code to output the events.' , 'hc_rse' ); ?><br />
			<?php _e( 'Here are a few common date patterns' , 'hc_rse' ); ?>: </p>
		<ul>
			<li><strong>Y-m-d</strong> 2000-02-01</li>
			<li><strong>d/m/Y</strong> - 01/02/2000</li>
			<li><strong>jS M Y</strong> - 1st Feb 2000</li>
		</ul>
		<p><?php _e( 'Here are few common time patterns' , 'hc_rse' ); ?>:</p>
		<ul>
			<li><strong>H:i</strong> - 22:00</li>
			<li><strong>g:i a</strong> - 11:00 pm</li>
			<li><strong>H:i e P</strong> - 22:00 UTC +00:00</li>
		</ul>
		<p><?php _e( 'You can also change the front-end link text to make it easy to customize this plugin for your language.' , 'hc_rse' ); ?></p>
		<p><?php _e( 'If you want to change the admin text as well, you will need to do a translation of the plugin.  Feel free to ask if you need help with this.' , 'hc_rse' ); ?></p>
		<br/>
		<br/>
	</div>
	<form action="" method="post">
		<table class="form-table">
			<tr>
				<th scope="row">
					<label for="hc_rse_date_format"><?php _e( 'Date Format' , 'hc_rse' ); ?></label>
				</th>
				<td>
					<input type="text" class="regular-text" name="hc_rse_date_format" id="hc_rse_date_format" value="<?php echo stripslashes( get_option( 'hc_rse_date_format' ) ); ?>"/>
					<p class="description"><?php _e( 'Accepts any ' , 'hc_rse' ); ?> <a href="http://php.net/manual/en/function.date.php" target="_blank"><?php _e( 'PHP date format string' , 'hc_rse' ); ?></a></p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="hc_rse_time_format"><?php _e( 'Time Format' , 'hc_rse' ); ?></label>
				</th>
				<td>
					<input type="text" class="regular-text" name="hc_rse_time_format" id="hc_rse_time_format" value="<?php echo stripslashes( get_option( 'hc_rse_time_format' ) ); ?>"/>
					<p class="description"><?php _e( 'Accepts any ' , 'hc_rse' ); ?> <a href="http://php.net/manual/en/function.date.php" target="_blank"><?php _e( 'PHP date format string' , 'hc_rse' ); ?></a></p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="hc_rse_more_info_link"><?php _e( 'More Info Link Text' , 'hc_rse' ); ?></label>
				</th>
				<td>
					<input type="text" class="regular-text" name="hc_rse_more_info_link" id="hc_rse_more_info_link" value="<?php echo stripslashes( get_option( 'hc_rse_more_info_link' , __( 'More Info' , 'hc_rse' ) ) ); ?>"/>
					<p class="description"><?php _e( 'Text for the more info link ' , 'hc_rse' ); ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="hc_rse_hide_info_link"><?php _e( 'Hide Info Link Text' , 'hc_rse' ); ?></label>
				</th>
				<td>
					<input type="text" class="regular-text" name="hc_rse_hide_info_link" id="hc_rse_hide_info_link" value="<?php echo stripslashes( get_option( 'hc_rse_hide_info_link' , __( 'Hide Info' , 'hc_rse' ) ) ); ?>"/>
					<p class="description"><?php _e( 'Text for the hide info link ' , 'hc_rse' ); ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label for="hc_rse_view_events_link"><?php _e( 'View All Events Link Text' , 'hc_rse' ); ?></label>
				</th>
				<td>
					<input type="text" class="regular-text" name="hc_rse_view_events_link" id="hc_rse_view_events_link" value="<?php echo stripslashes( get_option( 'hc_rse_view_events_link' , __( 'View Events' , 'hc_rse' ) ) ); ?>"/>
					<p class="description"><?php _e( 'Text for the view all events link in the widget' , 'hc_rse' ); ?></p>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" class="button-primary" value="<?php _e( 'Update Options' , 'hc_rse' ); ?>"/>
			</tr>
		</table>
		<?php wp_nonce_field( 'hc_rse_update_options' , 'hc_rse_update_options' ); ?>
	</form>
</div>

