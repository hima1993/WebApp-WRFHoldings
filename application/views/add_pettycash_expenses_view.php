
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Petty Cash Expenses
            <!--<small><?php echo $outletName ;?></small>-->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Add Petty Cash Expenses</li>
        </ol>
    </section>

<!-- Main content -->
<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12 col-lg-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Petty Cash Expenses</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    
                    <form role="form" action="<?php echo base_url()?>index.php/PettyCashController/addPettycash" method="POST">
                        <div class="box-body">

                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>From</label>

                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker" name="dateFrom" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>To</label>

                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" class="form-control pull-right" id="datepicker" name="dateTo" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                        </div>


                        <div class="col-xs-12 col-lg-12 col-sm-12">

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Petty Cash Type</label>
                                    <select class="form-control" name="pettyCashType" required>
                                        <option>Stationary</option>
                                        <option>Painting</option>
                                        <option>Cleaning Equipment</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" class="form-control"  name="amount" placeholder="Amount">
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-xs-12 col-lg-12 col-sm-12">

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="totalAmount">Total Amount</label>
                                    <input type="text" class="form-control"  name="totalAmount" placeholder="Total amount" required>
                                </div>
                            </div>
                            
                        </div>

                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-block btn-success" name="register">Submit</button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->




</div>
<!-- /.content-wrapper -->



<?php include "includes/footer.php";?>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })

</script>