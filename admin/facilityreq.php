<?php include_once('header.php');
 require_once('admin.function.php');
?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Facility Request</h3>
                    <p class="text-subtitle text-muted">For Facility list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Facility</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Request Datatable
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Bio Data</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $result = ShowData('facility');
                                          while($data = mysqli_fetch_assoc($result)){
                                    ?>
                            <tr>
                                <td><?php echo$data['id'];?></td>
                                <td><?php echo $data['name'];?></td>
                                <td><?php echo $data['email'];?></td>
                                <td><?php echo $data['mobile'];?></td>
                                <td><a href="../upload/facility/<?php echo $data['biodata']; ?>" target="_blank">
                                        <?php echo $data['biodata'];?></a></td>
                                <td>
                                    <?php
                                            if($data['status']){?>
                                    <a href="status.php?id=<?php echo $data['id'];?>" class="btn btn-success">Active</a>
                                    <?php }
                                            else{ ?>
                                                <a href="status.php?id=<?php echo $data['id'];?>" class="btn
                                    btn-danger">Unactive</a>

                                 <?php   }
                                    ?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <?php include_once('footer.php');?>