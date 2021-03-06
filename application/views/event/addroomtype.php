<?php $this->load->view('inc/header'); ?>
<?php
$role = $this->session->userdata('is_logged_admin')['admin_role'];
if ($role != "Admin") {
  redirect("admin/dashboard");
} ?>
<style>
label {
    font-weight: 600;
    display: inherit;
}
</style>
</head>
<body>

<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->
  <?php $this->load->view('inc/sidebar'); ?>

  <!-- /page sidebar -->

  <!-- Main container -->
  <div class="main-container">

	<!-- Main header -->
  <?php $this->load->view('inc/topnav'); ?>

	<!-- /main header -->

	<!-- Main content -->
		<div class="main-content">
			<h1 class="page-title">Add Event</h1>
      &nbsp;&nbsp; <?=$this->session->flashdata('message');?>

			<!-- Breadcrumb -->






<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <form method="post" action="<?php echo base_url('sales/addsales'); ?>" enctype="multipart/form-data">
                        <div class="col-md-12 col-sm-9 col-xs-10">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="field-1">Event Title</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="f_name" id="name" value="<?php echo set_value('f_name'); ?>" />
                                          <?=form_error('f_name', '<div class="error">', '</div>');?>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="field-3">Event Details</label>
                                    <div class="controls">
                                        <textarea name="address"  class="form-control"  rows="4" ><?php echo set_value('address'); ?></textarea>
                                          <?=form_error('address', '<div class="error">', '</div>');?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="field-3">Event Start Date</label>
                                    <div class="controls">
                                        <input type="date" name="attach_resume" class="form-control">
                                          <?=form_error('attach_resume', '<div class="error">', '</div>');?>
                                    </div>
                                </div>
                            </div>
							
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="field-3">Event End Date</label>
                                    <div class="controls">
                                        <input type="date" name="attach_resume" class="form-control">
                                          <?=form_error('attach_resume', '<div class="error">', '</div>');?>
                                    </div>
                                </div>
                            </div>							
							
							
							
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="field-3">Event Locaction</label>
                                    <div class="controls">
                                        <input type="text" name="attach_resume" class="form-control">
                                          <?=form_error('attach_resume', '<div class="error">', '</div>');?>
                                    </div>
                                </div>
                            </div>							
							


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="field-3">Event Doc</label>
                                    <div class="controls">
                                        <input type="file" name="attach_resume" class="form-control">
                                          <?=form_error('attach_resume', '<div class="error">', '</div>');?>
                                    </div>
                                </div>
                            </div>								
							
							
							
                           <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


		<!-- Footer -->

		<!-- /footer -->

	  </div>

		<!-- Footer -->

		<!-- /footer -->

	  </div>
	  <!-- /main content -->

  </div>
  <!-- /main container -->

</div>
<!-- /page container -->

<!--Load JQuery-->
<?php $this->load->view('inc/footer'); ?>

<!--Float Charts-->
<script src="<?= base_url('assets'); ?>/js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/plugins/flot/jquery.flot.selection.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/functions.js"></script>

</body>

</html>
