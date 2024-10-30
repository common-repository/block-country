<div class="wrap">

<div class="icon32" id="icon-edit-pages"></div>

<h2>Block Country</h2>

<div id="poststuff" class="metabox-holder has-right-sidebar">

		<div id="post-body">

			<div id="post-body-content" class="form-wrap">

                <form name="post_form" method="post" action="" enctype="multipart/form-data">

				<div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Set Country') ?></label>
<?php
global $wpdb, $table_prefix;
$query1 = "select * from ".$table_name;
$result1= $wpdb->get_results($query1, ARRAY_A);


?>
					<select name="set_country[]" id="set_country" multiple="multiple" size="10">
                    	<?php foreach($result1 as $key=>$val){
							if (in_array($val['iso'], $set_country)) {$sel='selected=selected';}else{$sel='';}
							?>
                        <option value="<?php echo $val['iso'];?>" <?php echo $sel; ?> ><?php echo $val['name'];?></option>
                        <?php } ?>
                        
                    </select>

					</div>

				</div>
				<div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Block for IP') ?></label>

					<textarea name="set_blockip" id="set_blockip" cols="10" rows="3"><?php echo $set_blockip;?></textarea>

					</div>

				</div>

				<div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Unblock for IP') ?></label>

					<textarea name="set_ip" id="set_ip" cols="10" rows="3"><?php echo $set_ip;?></textarea>

					</div>

				</div>
				<div id="titlediv">

					<div class="form-field">

					<label for="title"><?php _e('Message') ?></label>

					<textarea name="set_block_msg" id="set_block_msg" cols="10" rows="3"><?php echo $set_block_msg;?></textarea>

					</div>

				</div>

               

                <div style="margin-top:15px;">
              

                <input type="submit" name="submit" value="Submit" class="button button-primary button-large" />

                <input type="hidden" name="act" value="save" />

                </form>

			</div>

		</div>

	</div>  

</div>