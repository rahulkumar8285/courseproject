<?php
include_once('header.php');
include_once("admin.function.php");
if(isset($_POST['addcat'])){
  AddData($_POST['NewCatagrey'],'coursecat');
}
if(isset($_POST['delete'])){
    $result = DeleteSub('coursecat',$_POST['deleteid']);
}
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
        <div class="container">
            <section id="basic-vertical-layouts">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Catagrey Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="Add New Catagrey" name="NewCatagrey">
                                            </div>
                                        </div>

                                        <div class="col-2 ">
                                            <button type="submit" class="btn btn-primary " name="addcat">Add </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </section>
        </div>

        <!-- Hoverable rows start -->
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Total Course Category <?php echo TotalNumbers('coursecat');?></h4>
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
                                            <th>Id</th>
                                            <th>Catagrey Name</th>
                                            <th>Course Number</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                     $Num =1;
                                                     $data = ShowData('coursecat');
                                                     if(mysqli_num_rows($data)>0){
                                                       while($dataall =  mysqli_fetch_assoc($data)){?>
                                        <tr>
                                            <td class="text-bold-500"><?php echo $Num; ?></td>
                                            <td><?php echo $dataall['id'];?></td>
                                            <td class="text-bold-500"><a href="#"><?php echo $dataall["catname"]?></a>
                                            </td>
                                            <td><?php echo TotalNum('course','councatg',$dataall['id']);?></td>
                                            <td>

                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deletmodel" onclick="confirmDelete(this);"
                                                    data-id="<?php echo $dataall['id'];?>">
                                                    Danger
                                                </button>
                                            </td>
                                            <td><a href="#" class="btn btn-warning">Update</a></td>
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
<?php
include_once('footer.php');
?>