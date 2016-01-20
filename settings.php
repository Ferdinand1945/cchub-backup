<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php' ?>


  <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
      <div class="page-header pull-left">
        <div class="page-title">Inställningar</div>
      </div>
      <ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li><a href="#">Inställningar</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">Inställningar</li>
      </ol>
      <div class="clearfix"></div>
    </div>
    <div class="page-content">
      <div class="row">
        <div class="col-lg-6">
          <div class="portlet box portlet-violet">
            <div class="portlet-header">
              <div class="caption">Inställningar</div>
              <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
            </div>
            <div class="portlet-body pan">
              <form role="form" class="form-horizontal form-separated">
                <div class="form-body pdl">
                  <p>content</p>
                  <form class="form">
                    <label for="limit">Expiration date: &nbsp;<i data-hover="tooltip" data-original-title="Change the Expiration dateof the credit checks" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i> </label>
                    <select class="form-control">
                      <option>2 mån</option>
                      <option>4 mån</option>
                      <option>6 mån</option> 
                    </select>
                    <br>
                    <label for="fperiod">Freeze period: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i> </label>
                    <select class="form-control">
                      <option>12 mån</option>
                      <option>24 mån</option>
                      <option>36 mån</option> 
                    </select>
                 
                  <br>
                    <label for="slimit">Soft limit: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i> </label>
                    <select class="form-control">
                      <option>20</option>
                      <option>50</option>
                      <option>100</option> 
                    </select>
                
                <br>
                    <label for="hlimit">Hard limit: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                    <select class="form-control">
                      <option>150</option>
                      <option>200</option>
                      <option>300</option> 
                    </select>
                    
                    <br>
                                        <label for="hlimit">Creditlog exp. period: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                    <select class="form-control">
                      <option>2 mån</option>
                      <option>3 mån</option>
                      <option>4 mån</option> 
                    </select>
                    <br>
                                        <label for="hlimit">Systemlog exp.period: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                    <select class="form-control">
                      <option>2 mån</option>
                      <option>3 mån</option>
                      <option>4 mån</option> 
                    </select>
                    <br>
                 
                </div>
                </div>
              <div class="form-actions">
                <div class="col-md-offset-3 col-md-9">
                  <button type="submit" class="btn btn-primary">Spara ändringar</button>
                  &nbsp;
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
              </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>
  </body>
</html>