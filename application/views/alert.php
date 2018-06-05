<?php
/**
 * Created by PhpStorm.
 * User: f76278
 * Date: 20/02/2018
 * Time: 16:21
 */
?>
<script type="text/javascript" src="<?php echo assets_url(); ?>js/vendors/toastr.min.js"></script>
<link rel="stylesheet" href="<?php echo assets_url(); ?>css/toastr.min.css">

<script type="text/javascript">
	<?php if($this->session->flashdata('success')){ ?>

	toastr.success("<?php echo $this->session->flashdata('success'); ?>");

	<?php }else if($this->session->flashdata('error')){  ?>

	toastr.error("<?php echo $this->session->flashdata('error'); ?>");

	<?php }else if($this->session->flashdata('warning')){  ?>

	toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");

	<?php }else if($this->session->flashdata('info')){  ?>

	toastr.info("<?php echo $this->session->flashdata('info'); ?>");

	<?php } ?>
</script>
