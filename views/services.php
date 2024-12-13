<?php include 'nav/header.php' 
?> 
  <main class="main">

<br>
<br>

    <!-- Services Section -->
    <style>
    body {
        background-color: #faebd7;
    }

    .card {
        height: 100%; /* Ensures all cards have equal height */
    }

    .card-img-top {
        height: 225px; 
        object-fit: cover;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Limit description to 3 lines */
        -webkit-box-orient: vertical;
        height: 4.5rem; /* Adjust based on line clamp */
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>


<main>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Services</h1>
            <p class="lead text-muted">Discover our range of services designed to make your Leyte adventure unforgettable. From guided tours to convenient reservations, we’re here to help you experience the best of Leyte's breathtaking destinations.</p>
        </div>
    </div>
</section>
	<hr>
    <div class="album py-5">
        <div class="container-fluid py-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                <?php foreach($services as $row => $value){ 
                    $str = explode(' ', $value['service_name']);
                    $modal = $str[0] . $value['services_id'];
                    
                    ?>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="../images/<?= $value['service_image']?>" class="card-img-top" alt="Thumbnail 1" style="height: 225px; object-fit: cover;">
                            
                            <div class="card-body">
                                <h1 class="card-title"><?= $value['service_name']?></h1>
                                <p class="card-text"><?= $value['description']?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- Trigger Modal -->
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#<?= $modal?>">
                                            View
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Reserve now!</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="<?=$modal?>" tabindex="-1" aria-labelledby="<?= $value['service_name']?>Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="<?= $value['service_name']?>Label"><?= $value['service_name']?></h5>
                                    <h5 class="modal-title" id="<?= $value['sprice']?>Label"><?= $value['price']?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="../images/<?= $value['service_image']?>" alt="<?= $value['service_name']?>" style="width: 100%; height: auto;">
                                    <p class="card-text"><?= $value['description']?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>  
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>


  </main>
<?php include 'nav/footer.php' ?>