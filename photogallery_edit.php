<?php
include('config.php');
include('session.php');
?>
<?php
$id=$_GET['gallery_id'];
$que="SELECT * FROM `tbl_gallery` WHERE `gallery_id`='$id'";
$query1=mysqli_query($con,$que);
$row1=mysqli_fetch_array($query1);
// $query=mysqli_query($con,"tbl_gallerySELECT* FROM `tbl_upcoming_batches` WHERE 'batche_id'='$id'");
// $row1=mysqli_fetch_array($query);
if (isset($_POST['submit']))
{
$name1=$_POST['name1'];
$new_image=$_FILES['newimage']['name'];
$old_image=$_POST['image'];
if ($new_image!='')
{
    $update_filename=$_FILES['newimage']['name'];
    
move_uploaded_file($_FILES['newimage']['tmp_name'],'uploaded_images/'.$update_filename);
}
else
{
    $update_filename=$old_image;
}


$query = "UPDATE `tbl_gallery` SET `name1`='$name1', `image`='$update_filename' WHERE `gallery_id` = '$id' ";

$runquery=mysqli_query($con,$query);
if($runquery){
echo'<script>
alter ("successfully updated");
</script>';
echo'<script>
window.location="photogallery_view.php";
</script>';
}
else
{
    echo 'not update';
}
}
?>



<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/ubold/layouts/purple/forms-masks.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 06:38:02 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CDA Campus Pvt. Ltd
@CDACAMPUSPVT.LTD  · Education</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php
            include('header.php');
            ?>
            <?php
            include('navigation.php');
            ?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
           
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">CDA Campus</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Gallery</a></li>
                                           
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Photo/Gallery</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        

                                        <div class="row">
                                            <div class="col-md-6">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                    
                                                    <div class="form-group">
                                                        <label>name</label>
                                                        <input type="text"  name="name1" class="form-control" value="<?= $row1['name1'] ?>" data-toggle="input-mask" >
                                                        <span class="font-13 text-muted">e.g "name"</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Images</label>
                                                        <input type="file" name="newimage" class="form-control"  value="" id="fileToUpload">

                                                        <span class="font-13 text-muted">e.g "image"</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Images</label>
                                                        <input type="text" name="image" class="form-control"  value="<?= $row1['image'] ?>" id="fileToUpload">

                                                        <span class="font-13 text-muted">e.g "image"</span>
                                                    </div>
                                                    <div class="form-group">                                                      
<button type="submit" name="submit" class="btn btn-primary waves-effect waves-light mb-2">Save Changes</button>
</div>
                                                   
                                                   
            
                                                </form>
                                               
    
                                                <!-- </table> -->
                                            </div> <!-- end col -->

                                            
                                        <!-- end row -->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row --> 

                       <!-- end row --> 
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2015 - 2019 &copy; UBold theme by <a href="#">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox1" type="checkbox" checked>
                        <label for="Rcheckbox1">
                            Notifications
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox2" type="checkbox" checked>
                        <label for="Rcheckbox2">
                            API Access
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox3" type="checkbox">
                        <label for="Rcheckbox3">
                            Auto Updates
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox4" type="checkbox" checked>
                        <label for="Rcheckbox4">
                            Online Status
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-0">
                        <input id="Rcheckbox5" type="checkbox" checked>
                        <label for="Rcheckbox5">
                            Auto Payout
                        </label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Plugins js -->
        <script src="assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
        <script src="assets/libs/autonumeric/autoNumeric-min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-masks.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/purple/forms-masks.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 06:38:03 GMT -->
</html>