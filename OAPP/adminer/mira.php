<?php 
    require_once("sesion.php");
  require_once("DBManager.php");
  
  $sesion = new sesion();
  $usuario = $sesion->get("usuario");
  $nombre = $sesion->get("nombre");
  
  if( $usuario == false ){  
    header("Location: ../index.php");    
  }
  
  require_once("cminer.php");
  $objUsuario=new usuarios();
  

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="Mosaddek" name="author" />
    <link rel="stylesheet" type="text/css" href="css/adminer.css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/style-default.css" rel="stylesheet" id="style_color" />
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<div class="tab-pane" id="portlet_tab4">
                                            <form class="form-horizontal search-result">
                                                <div class="control-group">
                                                    <label class="control-label">Search</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-xxlarge" >
                                                        <p class="help-block">About 3,880,000 results (0.29 seconds) </p>
                                                    </div>
                                                    <button type="submit" class="btn ">SEARCH</button>
                                                </div>
                                            </form>
                                            <div class="space20"></div>
                                            <!--BEGIN PRODUCT SEARCH-->
                                            <div class="row-fluid product-search">
                                                <div class="span4 product-text">
                                                    <img alt="" src="img/product1.jpg">
                                                    <div class="portfolio-text-info">
                                                        <h4>iMac Slim</h4>
                                                        <p>21 inch Display, 1.8 GHz Processor, 8 GB Memory</p>
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                    <div class="product-info">
                                                        Today Sold
                                                        <span>190</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Today's Earning
                                                        <span>1,970</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Sold
                                                        <span>$12.300</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Earnings
                                                        <span>$12.300</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid product-search">
                                                <div class="span4 product-text">
                                                    <img alt="" src="img/product2.png">
                                                    <div class="portfolio-text-info">
                                                        <h4>iMac Slim</h4>
                                                        <p>21 inch Display, 1.8 GHz Processor, 8 GB Memory</p>
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                    <div class="product-info">
                                                        Today Sold
                                                        <span>190</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Today's Earning
                                                        <span>1,970</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Sold
                                                        <span>$12.300</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Earnings
                                                        <span>$12.300</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid product-search">
                                                <div class="span4 product-text">
                                                    <img alt="" src="img/product3.png">
                                                    <div class="portfolio-text-info">
                                                        <h4>iMac Slim</h4>
                                                        <p>21 inch Display, 1.8 GHz Processor, 8 GB Memory</p>
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                    <div class="product-info">
                                                        Today Sold
                                                        <span>190</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Today's Earning
                                                        <span>1,970</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Sold
                                                        <span>$12.300</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Earnings
                                                        <span>$12.300</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid product-search">
                                                <div class="span4 product-text">
                                                    <img alt="" src="img/product4.png">
                                                    <div class="portfolio-text-info">
                                                        <h4>iMac Slim</h4>
                                                        <p>21 inch Display, 1.8 GHz Processor, 8 GB Memory</p>
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                    <div class="product-info">
                                                        Today Sold
                                                        <span>190</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Today's Earning
                                                        <span>1,970</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Sold
                                                        <span>$12.300</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Earnings
                                                        <span>$12.300</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid product-search">
                                                <div class="span4 product-text">
                                                    <img alt="" src="img/product5.png">
                                                    <div class="portfolio-text-info">
                                                        <h4>iMac Slim</h4>
                                                        <p>21 inch Display, 1.8 GHz Processor, 8 GB Memory</p>
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                    <div class="product-info">
                                                        Today Sold
                                                        <span>190</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Today's Earning
                                                        <span>1,970</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Sold
                                                        <span>$12.300</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Total Earnings
                                                        <span>$12.300</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--END PRODUCT SEARCH-->
                                            <div class="space20"></div>

                                            <div class="pagination pagination-centered">
                                                <ul>
                                                    <li><a href="#">Prev</a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">Next</a></li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END TAB PORTLET-->
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Metro Lab Dashboard.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>