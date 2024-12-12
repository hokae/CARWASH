<?php 
    include 'nav/topnav.php'; 
    include 'nav/server_sidebar.php';
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
    <form action="../page/Admin-services.php?function=addService&&sub_page=addService" align="right" method="POST" enctype= multipart/form-data>
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
                                        <?=$srvc['service_name'] ?>
                                    </td>
                                    <td style="text-align:center">
                                        <img src="../images/<?= $srvc['service_image'] ?>" width="20px" height="20px" />
                                    </td>
                                    <td style="text-align:center"><?= $srvc['description'] ?></td>
                                    <td style="text-align:center"><?= $srvc['price'] ?></td>
                                    <td style="text-align:center">
                                        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="edit<?=$value['services_id']?>">Edit</a>  
                                        <a class="btn btn-sm btn-warning" href="../page/Admin-services.php?sub_page=services_delete&&function=services_delete&&services_id=<?= $srvc['services_id'] ?>" >Delete</a>
                                    </td>
                                </tr>

                                <form action="../page/addbookingsmodel.php?function=updateSrvcs&&sub_page=updateSrcvs" method="post">	
                                    <input type="hidden" name="services_id" value="<?=$value['services_id']?>"> 
                                <div class="modal fade" id="edit<?=$value['services_id']?>" tabindex="-1" aria-labelledby="<?= $value['service_name']?>Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
    
                                            </div>
                                            <div class="modal-body">
                                                <label for="service_name">Services Name:</label>
                                                <input type="text" name="service_name" class="form-control" value="<?=$value['service_name']?>"><br>
                                                <label for="service_info">Services label:</label><br>
                                                <textarea name="service_name" class="form-control"><?=$value['description']?></textarea>
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
                </div>
            </div>
            
            <div id="mncp" class="w3-container w3-display-container city" style="display:none">
                <span onclick="this.parentElement.style.display='none'"
                class="w3-button w3-large w3-display-topright">&times;</span>
                <h2>Municipality</h2>
                
                <div class="row">
                    <div class="col-md-4">
                        <h3>Add Municipality</h3>
                        <form action="../page/admin.php?function=addMunicipality&&sub_page=addMunicipality" method="POST" align="right">
                            <select class="form-control" name="prov_id">
                                <option disabled selected>**SELECT PROVINCE**</option>
                                <option disabled></option>
                                <?php
                                    foreach ($province as $prov){
                                        ?>
                                            <option value="<?= $prov['prov_id']?>"><?= $prov['prov_name']?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                            <input class="form-control" name="name" placeholder="Municipality Name" />
                            <button class="mt-2 btn btn-primary btn-sm" type="submit">
                                Add
                            </button>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <h3>List of Municipalities</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Province Name</th>
                                    <th>Municipality Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $n = 0;
                                    foreach ($municipality as $mncp){
                                            $n++;
                                        ?>
                                            <tr>
                                                <td><?= $n ?></td>
                                                <td><?= $mncp['prov_name'] ?></td>
                                                <td><?= $mncp['mncp_name'] ?></td>
                                                <td>
                                                    <!-- <a class="btn btn-primary btn-sm" href="">Edit</a> -->
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#mncp<?= $mncp['mncp_id'] ?>">
                                                        Edit
                                                    </button>
                                                    | 
                                                    <a class="btn btn-danger btn-sm" href="../page/admin.php?function=deleteMunicipality&&sub_page=deleteMunicipality&&id=<?= $mncp['mncp_id'] ?>">Delete</a>
                                                </td>
                                            </tr>
                                            <!-- Button trigger modal -->


                                            <!-- Modal -->
                                            <form method="POST" action="../page/admin.php?function=editMuni&&sub_page=editMuni&&id=<?= $mncp['mncp_id'] ?>">
                                                <div class="modal fade" id="mncp<?= $mncp['mncp_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Edit Province for <?= $mncp['mncp_name'] ?></label>
                                                                    <select name="provii" id="" class="form-control mb-3">
                                                                    <option value="<?= $mncp['prov_id'] ?>"><?= $mncp['prov_name'] ?></option>
                                                                </select>																			</div>
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Edit Municipality : <?= $mncp['mncp_name'] ?></label>
                                                                    <input type="text" class="form-control" name="mncp" id="" value="<?= $mncp['mncp_name'] ?>">
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Submit</button>
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
                </div>
            </div>
            
            <div id="brgy" class="w3-container w3-display-container city" style="display:none">
                <span onclick="this.parentElement.style.display='none'"
                class="w3-button w3-large w3-display-topright">&times;</span>
                <h2>Barangay</h2>
                
                <div class="row">
                    <div class="col-md-3">
                        <h3>Add Barangay</h3>
                        <form action="../page/admin.php?function=addBarangay&&sub_page=addBarangay" method="POST" align="right">
                            <select class="form-control" name="mncp_id">
                                <option disabled selected>**SELECT MINICIPALITY**</option>
                                <option disabled></option>
                                <?php
                                    foreach ($municipality as $mncp){
                                        ?>
                                            <option value="<?= $mncp['mncp_id']?>"><?= $mncp['mncp_name'].", ".$mncp['prov_name']?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                            <input class="form-control" name="name" placeholder="Barangay Name" />
                            <button class="mt-2 btn btn-primary btn-sm" type="submit">
                                Add
                            </button>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <h3>List of Barangays</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Province Name</th>
                                    <th>Municipality Name</th>
                                    <th>Barangay Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $n = 0;
                                    foreach ($barangay as $brgy){
                                            $n++;
                                        ?>
                                            <tr>
                                                <td><?= $n ?></td>
                                                <td><?= $brgy['prov_name'] ?></td>
                                                <td><?= $brgy['mncp_name'] ?></td>
                                                <td><?= $brgy['brgy_name'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#brgy<?= $brgy['brgy_id'] ?>">
                                                        Edit
                                                    </button>
                                                    | 
                                                    <a class="btn btn-danger btn-sm" href="../page/admin.php?function=deleteBarangay&&sub_page=deleteBarangay&&id=<?= $brgy['brgy_id'] ?>">Delete</a>
                                                </td>
                                            </tr>
                                                <form method="POST" action="../page/admin.php?function=updateBrgy&&sub_page=updateBrgy&&id=<?= $brgy['brgy_id'] ?>">
                                                        <div class="modal fade" id="brgy<?= $brgy['brgy_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label for="" class="form-label">Edit Municipality for <?= $brgy['brgy_name'] ?></label>
                                                                            <select name="provii" id="" class="form-control mb-3">
                                                                            <option value="<?= $mncp['mncp_id'] ?>"><?= $brgy['mncp_name'] ?></option>
                                                                        </select>																			</div>
                                                                        <div class="mb-3">
                                                                            <label for="" class="form-label">Edit Barangay : <?= $brgy['brgy_name'] ?></label>
                                                                            <input type="text" class="form-control" name="mncp" id="" value="<?= $brgy['brgy_name'] ?>">
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
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
                </div>
            </div>
        </div>
    </main>


    </div>
    <!-- /.container-fluid -->
    <?php include 'nav/server_footer.php' ?>
