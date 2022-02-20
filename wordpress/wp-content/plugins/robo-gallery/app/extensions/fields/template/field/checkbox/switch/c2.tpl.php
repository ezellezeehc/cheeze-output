<?php 
	$colCount = 12;  
	if(isset($options['column'])) $colCount = $options['column'];
	
	$colCountWrap = 12;
	if(isset($options['columnWrap'])) $colCountWrap = $options['columnWrap'];
?>
<div class="field small-<?php echo $colCountWrap; ?> columns">
	
	<?php if ($label) : ?>
		<label>
			<?php echo $label; ?>
		</label>
	<?php endif; ?>
	
	<div class="switch-element">
		<div id="field-element-<?php echo $id; ?>" class="switch <?php echo $options['size']; ?>">
			<input id="<?php echo $id; ?>" class="switch-input"
			       type="checkbox" name="<?php echo $name; ?>"
			       value="1" <?php echo $value ? 'checked' : '' ?>
				   data-dependents='<?php echo $dependents; ?>' >
			<label class="switch-paddle" for="<?php echo $id; ?>">
				<span class="switch-active" aria-hidden="true">
					<?php echo $options['onLabel']; ?>
				</span>
				<span class="switch-inactive" aria-hidden="true">
					<?php echo $options['offLabel']; ?>
				</span>
			</label>
		</div>
	</div>

	<?php if ($description) : ?>
		<p class="help-text"><?php echo $description; ?></p>
	<?php endif; ?>
	
</div>