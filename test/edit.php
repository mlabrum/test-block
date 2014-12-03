<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>

<fieldset>
	<legend><?php echo t('Content')?></legend>
	<input type="text" value="dummy field"/>

	<br>
	<br>
	<p>Select the below text and click the "Link" Button and then "Insert Link" and the selected text will lose focus </p>
	<div class="form-group">
		<?php echo $form->label('content', t('Content'))?>
		<?php echo $form->textarea("content", "Sample text"); ?>
	</div>

</fieldset>

<script type="text/javascript">
	var CCM_EDITOR_SECURITY_TOKEN = "<?php echo Loader::helper('validation/token')->generate('editor')?>";
	$(function() {
		<?php
			$fp = FilePermissions::getGlobal();
			$tp = new TaskPermission();
		 ?>

		$('#content').redactor({
			minHeight: '100',
			'concrete5': {
				filemanager: <?php echo $fp->canAccessFileManager()?>,
				sitemap: <?php echo $tp->canAccessSitemap()?>,
				lightbox: true
			},
			'plugins': [
				'fontcolor', 'concrete5'
			]
		});
	});
</script>