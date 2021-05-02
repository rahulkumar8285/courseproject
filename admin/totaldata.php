<?php include_once("header.php");
  include_once("admin.function.php");
?>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Course Category</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course Catagrey</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
            <!-- Hoverable rows start -->
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Total Course <?php echo TotalNumbers('course');?></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                            </div>
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <?php 
                                        
                                       ?>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Course ID</th>
                                            <th>Course Name</th>
                                            <th>Course Catagrey</th>
                                            <th>Public Date</th>
                                            <th>Price</th>
                                            <th>Coupe Code</th>
                                            <th>Facility ID</th>
                                            <th>Total Video</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                     $Num =1;
                                                     $data = ShowData('course');
                                                     if(mysqli_num_rows($data)>0){
                                                       while($dataall =  mysqli_fetch_assoc($data)){?>
                                        <tr>
                                            <td class="text-bold-500"><?php echo $Num; ?></td>
                                            <td><?php echo $dataall['id'];?></td>
                                            <td class="text-bold-500"><a href="#"><?php echo $dataall["coursename"]?></a>
                                            </td>
                                            <td><?php echo CatName('coursecat',$dataall['councatg']);?></td>
                                            <td><?php echo $dataall["publisdate"] ;?></td>
                                            <td><?php echo $dataall["sellprice"] ;?></td>
                                            <td><?php echo $dataall["coupencode"] ;?></td>
                                            <td><?php echo $dataall["authorid"] ;?></td>
                                            <td><?php echo $dataall["totalvideo"] ;?></td>
                                            <td>

                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deletmodel" onclick="confirmDelete(this);"
                                                    data-id="<?php echo $dataall['id'];?>">
                                                    Danger
                                                </button>
                                            </td>
                                            
                                        </tr>
                                        <?php  $Num++;
                                                       } 
                                                     }
                                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hoverable rows end -->
        <!---modell-->
    </div>
    <!---modell--->
    <div class="modal fade text-left" id="deletmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title white" id="myModalLabel120">
                        Danger Modal
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Course Catagrey</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this user ? </p>
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form-delete-user">
                            <input type="hidden" name="deleteid">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" form="form-delete-user" name="delete"
                            class="btn btn-danger">Delete</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<?php include_once("footer.php"); ?>