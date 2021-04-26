<?php include_once('header.php'); 
   require_once('facility.function.php');
   if(isset($_POST['delete'])){
     DeleteId('course',$_POST['deleteid']);
   }
?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Tables</h4>
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Total Numbers of Course</div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Course Id</th>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Selling Price</th>
                                        <th scope="col">Course Catagrey</th>
                                        <th scope="col">Public Date</th>
                                        <th scope="col">Coupan Code</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Delete Operation</th>
                                        <th scope="col">Update Operation</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php 
                        $result =  SelectData('course','authorid',$_SESSION['faid']);
                        while($data = mysqli_fetch_assoc($result)){?>
                                    <tr>
                                        <td><?php echo $data['id'];?></td>
                                        <td><?php echo $data['coursename'];?></td>
                                        <td>
                                            <?php echo $data['sellprice'];?>
                                        </td>
                                        <td><?php
                                echo CatName($data['councatg']);
                              ?></td>
                                        <td><?php echo $data['publisdate'];?></td>
                                        <td><?php echo $data['coupencode'];?></td>
                                        <td>
                                            <?php if($data['status']){
                                            echo "Publis";}
                                            else{
                                              echo "Unpublis";
                                            } ?>
                                        </td>
                                        <td>
                                           
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deletmodel" onclick="confirmDelete(this);" data-id="<?php echo $data['id'];?>">
                                                Delete
                                            </button>

                                        </td>
                                        <td>
                                            <a class="btn btn-warning"
                                                href="update.php?cosid=<?php echo $data['id'];?>">Update</a>
                                        </td>
                                    </tr>
                                    <?php } ?>


                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!--------delete---model----->
<div id="deletmodel" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete User</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this user ?</p>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form-delete-user">
                    <input type="hidden" name="deleteid">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" form="form-delete-user" name="delete" class="btn btn-danger">Delete</button>
            </div>
 
        </div>
    </div>
</div>
<?php
  include_once('footer.php');
?>