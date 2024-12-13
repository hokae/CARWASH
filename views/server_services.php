<?php 
    include 'nav/topnav.php'; 
    include 'nav/server_sidebar.php';
    include_once '../model/BookingModel.php';
    $model = new BookingModel();
    $services = $model->get_service();
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Carwash Bookings</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div> -->


                        <!--------------------------Content Here!-------------------------->
                        <main class=" ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Carwash Services</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>
    <form action="../page/Admin_services.php?function=addService&&sub_page=addService" align="right" method="POST" enctype= multipart/form-data>
        <input type="text" class="form-control" name="name" placeholder="Service Name ">
        <input type="file" class="form-control" name="image">
            <textarea class="form-control"  name="desc" placeholder="Description"></textarea>
            <input class="form-control" type="number" name="prices" placeholder="Price">
        <button class="btn btn-sm btn-primary mt-2">
            <span class="fas fa-save"></span>
            Save
        </button>
    </form>
</div>
<hr>

<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th style="text-align:center">No.</th>
                <th style="text-align:center">Service Name</th>
                <th style="text-align:center"> Image</th>
                <th style="text-align:center">Service Description</th>
                <th style="text-align:center">Price</th>
                <th style="text-align:center">Action</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    $n = 0;
                        foreach ($services as $srvc){
                        $n++;
                            ?>
                                <tr>
                                    <td style="text-align:center"><?= $n; ?></td>
                                    <td style="text-align:center">
                                        <?=$srvc['services_name'] ?>
                                    </td>
                                    <td style="text-align:center">
                                        <img src="../images/<?= $srvc['services_image'] ?>" width="20px" height="20px" />
                                    </td>
                                    <td style="text-align:center"><?= $srvc['services_description'] ?></td>
                                    <td style="text-align:center"><?= $srvc['services_price'] ?></td>
                                    <td style="text-align:center">
                                        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="edit<?=$value['services_id']?>">Edit</a>  
                                        <a class="btn btn-sm btn-warning" href="../page/Admin-services.php?sub_page=services_delete&&function=services_delete&&services_id=<?= $srvc['services_id'] ?>" >Delete</a>
                                    </td>
                                </tr>

                                <form action="../page/addbookingsmodel.php?function=updateSrvcs&&sub_page=updateSrcvs" method="post">	
                                    <input type="hidden" name="services_id" value="<?=$value['services_id']?>"> 
                                <div class="modal fade" id="edit<?=$value['services_id']?>" tabindex="-1" aria-labelledby="<?= $value['services_name']?>Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
    
                                            </div>
                                            <div class="modal-body">
                                                <label for="service_name">Services Name:</label>
                                                <input type="text" name="service_name" class="form-control" value="<?=$value['services_name']?>"><br>
                                                <label for="service_info">Services label:</label><br>
                                                <textarea name="service_name" class="form-control"><?=$value['services_description']?></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-warning" data-bs-dismiss="modal">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            <?php
                    }
                ?>
        </tbody>
    </table>
</div>
<!-- input stops here -->
                   
    </div>
    <!-- /.container-fluid -->
    <?php include 'nav/server_footer.php' ?>
