<?php include_once("header.php");
  include_once("admin.function.php");
?>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Course Video</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Total Video</li>
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
                            <h4 class="card-title">Total video <?php echo TotalNumbers('video');?></h4>
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
                                            <th scope="col">Sno</th>
                                            <th scope="col">Video ID</th>
                                            <th scope="col">Video Name</th>
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Auth</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Facility ID</th>
                                            <th scope="col">Delete </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php 
                                        $num=1;
                        $result =  ShowData('video');
                        while($data = mysqli_fetch_assoc($result)){?>
                                        <tr>
                                            <td><?php echo $num;?></td>
                                            <td><?php echo $data['id'];?></td>
                                            <td>
                                                <?php echo $data['video'];?>
                                            </td>
                                            <td><?php
                                            echo CatName('course',$data['coursename']);
                                            ?></td>
                                            <td>
                                                <?php if($data['auth']){
                                            echo "Free";}
                                            else{
                                              echo "Paid";
                                            } ?>
                                            </td>
                                            <td>
                                                <?php if($data['status']){
                                            echo "Publis";}
                                            else{
                                              echo "Unpublis";
                                            } ?>
                                            </td>
                                            <td> <?php echo $data['facilityid'];?></td>
                                            <td>

                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deletmodel" onclick="coursedelvideo(this);"
                                                    data-id="<?php echo $data['id'];?>"
                                                    data-cd="<?php echo $data['coursename'] ;?>">
                                                    Delete
                                                </button>

                                            </td>

                                        </tr>
                                        <?php
                                     $num++;    
                                    } ?>


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