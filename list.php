<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>

        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Logg</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li><a href="#">Logg</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Logg</li>
                </ol>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Kredit logg</div>
                                <div class="actions"><a href="#" class="btn btn-info btn-xs"><i class="fa fa-plus"></i>&nbsp;
                                    New Customer</a>&nbsp;
                                    <div class="btn-group"><a href="#" data-toggle="dropdown" class="btn btn-warning btn-xs dropdown-toggle"><i class="fa fa-wrench"></i>&nbsp;
                                        Tools</a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#">Export to Excel</a></li>
                                            <li><a href="#">Export to CSV</a></li>
                                            <li><a href="#">Export to XML</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Print Invoices</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row mbm">
                                    <div class="col-lg-12">
                                        <div style="display: none;" class="alert alert-danger tb-alert-error">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                        <div style="display: none" class="alert alert-success tb-alert-success">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                                <textarea style="display: none;" class="gw-row">
                                    <tr>
                                        <td>{checkbox}</td>
                                        <td>{index}</td>
                                        <td>{name}</td>
                                        <td>{country}</td>
                                        <td>{gender}</td>
                                        <td>{order}</td>
                                        <td>{date}</td>
                                        <td>{price}</td>
                                        <td>{status}</td>
                                        <td>
                                            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;
                                                Edit
                                            </button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                </textarea>

                                <div class="row mbm">
                                    <div class="col-lg-6">
                                        <div class="pagination-panel">Page
                                            &nbsp;<a href="#" class="btn btn-sm btn-default btn-prev gw-prev"><i class="fa fa-angle-left"></i></a>&nbsp;<input type="text" maxlenght="5" value="1" class="pagination-panel-input form-control input-mini input-inline input-sm text-center gw-page"/>&nbsp;<a href="#" class="btn btn-sm btn-default btn-prev gw-next"><i class="fa fa-angle-right"></i></a>&nbsp;
                                            of 6 | View
                                            &nbsp;<select class="form-control input-xsmall input-sm input-inline gw-pageSize">
                                                <option value="20" selected="selected">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="150">150</option>
                                                <option value="-1">All</option>
                                            </select>&nbsp;
                                            records | Found total 58 records
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tb-group-actions pull-right"><span>10 records selected:</span><select class="table-group-action-select form-control input-inline input-small input-sm mlm">
                                            <option value="0">Select...</option>
                                            <option value="1">Cancel</option>
                                            <option value="2">Hold</option>
                                            <option value="3">On Hold</option>
                                            <option value="4">Close</option>
                                        </select>&nbsp;
                                            <button class="btn btn-sm btn-primary submit-action"><i class="fa fa-check"></i>&nbsp;
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                              
<?php include'section-list.php'; ?>
                              
                                <div class="row mbm">
                                    <div class="col-lg-6">
                                        <div class="pagination-panel">Page
                                            &nbsp;<a href="#" class="btn btn-sm btn-default btn-prev gw-prev"><i class="fa fa-angle-left"></i></a>&nbsp;<input type="text" maxlenght="5" value="1" class="pagination-panel-input form-control input-mini input-inline input-sm text-center gw-page"/>&nbsp;<a href="#" class="btn btn-sm btn-default btn-prev gw-next"><i class="fa fa-angle-right"></i></a>&nbsp;
                                            of 6 | View
                                            &nbsp;<select class="form-control input-xsmall input-sm input-inline gw-pageSize">
                                                <option value="20" selected="selected">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="150">150</option>
                                                <option value="-1">All</option>
                                            </select>&nbsp;
                                            records | Found total 58 records
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-12">
                      <h3>Advanced log</h3>
                        <div class="portlet box">
                          
                            <div class="portlet-header">
                              <button class="button" onclick="location.href='log.php';">System log</button>
                              
                          </div>
                      </div>
             </div>
                </div>
                                
            </div>
          

         <br><br>
            <!--END CONTENT--><!--BEGIN FOOTER-->
          <?php include 'footer.php'; ?>
  </div>
</body>
</html>