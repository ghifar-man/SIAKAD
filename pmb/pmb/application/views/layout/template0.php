<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>STMIK ADHI GUNA</title>

<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/plugins/dataTables/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/datepicker3.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/lumino.glyphs.js') ?>"></script>
</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="<?php echo site_url('login/login') ?>" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="User Name" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password Or Pin" name="password" type="password" value="">
							</div>
							<button type="submit" name="" class="btn btn-primary pull-right">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


	<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/easypiechart.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/easypiechart-data.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/qcode-decoder.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/plugins/dataTables/js/jquery.dataTables.js') ?>"></script>
	<script src="<?php echo base_url('assets/plugins/dataTables/js/dataTables.bootstrap.min.js') ?>"></script>

  <script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '-3d'
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>

</body>

</html>
