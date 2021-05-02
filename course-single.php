<?php require_once("header.php");
      require_once("function.inc.php"); 
      $CourseID = $_GET['cid'];
      $result = SelectData("course","id",$CourseID);
      $Course = mysqli_fetch_assoc($result);
?>
<div class="about-area pt-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                <img src="./upload/course/<?php echo $Course['imgpath'] ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-caption ">
                    <!-- Section Tittle -->
                    <div class="section-tittle ">

                        <h2 class="pt-2"><?php echo ucwords($Course['coursename']);?></h2>
                    </div>
                    <p><?php echo ucwords($Course['shotdescription']);?></p>

                    <ul>
                        <li><span class="flaticon-business"></span> Projects :- <?php echo $Course['project'];?></li>
                        <li><span class="flaticon-communications-1"></span>Lecture :-
                            <?php echo $Course['totalvideo'];?></li>
                        <li><span class="flaticon-graduated"></span>Text Notes Files<?php echo $Course['totalvideo'];?>
                        </li>
                        <li><span class="flaticon-tools-and-utensils"></span>Text Notes
                            Files<?php echo $Course['totalvideo'];?></li>
                    </ul>

                    <?php
                             
                              if(isset($_SESSION['stuname'])||isset($_SESSION['stuemail'])){ 
                               echo'<a href="coursebuy.php?cid='.$CourseID.'" class="btn">
                                        Check Now
                                    </a>';
                               }else{
                            echo'<a href="singup.php?cid='.$CourseID.'" class="btn">Byu Now </a>';     
                               }
                            ?>

                </div>
            </div>

        </div>
    </div>
</div>
<!----------------->
<div class="container py-5">
    <h3>Course Discretion</h3>
    <p><?php echo $Course['discretion'];?></p>
</div>
<div class="container py-3">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Video Course Lecture
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <?php $result =  VideoList('video','coursename',$CourseID);?>
                        <div class="card-body">
                            <div class="list-group">

                                <?php 
                            $videonum=1;
                            while($data = mysqli_fetch_assoc($result)){ ?>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <div class="row">
                                       
                                        <div class="col-10"><?php echo "(".$videonum.") ".$data['video'] ?></div>
                                        <div class="col-2"><?php if($data['auth']){echo "Paid";}else{echo "Free";} ?></div>
                                    </div>
                                </a>
                                <?php $videonum++;}?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--/row-->
</div>
<!--container-->
<?php require_once("footer.php");