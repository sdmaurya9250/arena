<?php 

include("../config.php");

include('header.php'); 

// $courses = $db->getVal("select count(id) from course");

// $users = $db->getVal("select count(id) from users");

// $videos = $db->getVal("select count(id) from videos");

// $payment = $db->getVal("select sum(amt) from payment");



?>

<style type="text/css">

.huge { font-size: 26px;}

.card{ box-shadow: 4px 2px 5px 0 rgb(193 142 142 / 16%), -4px 2px 10px 0 rgb(210 214 218);}

thead{background: #2b3252;color: white;}

h2{text-align: center;margin-top: 15px;color: grey;}

</style>

<body>



    <div id="wrapper">



		<?php include('menu.php'); ?>



        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <!-- <h1 class="page-header">Dashboard</h1> -->

                </div>

                <!-- /.col-lg-12 -->

            </div>

            <!-- /.row -->

           

                </div>

            </div>



            <!-- <div class="row"> -->

                <!-- <div class="col-md-6" style="padding: 5px;"> -->

                <!-- <div class="card" style="padding: 10px;">                     -->

                <!-- <h2>Recent Users</h2> -->

                   <!--  <table class="table table-bordered table-striped table-hover mgt-20">

                        <thead>

                            <tr>

                                <th>S.No</th>

                                <th>Name</th>

                                <th>Mobile</th>                            

                            </tr>

                        </thead>

                        <tbody>

                            <?php 

                            // $users = $db->getRows("select * from users order by created_date desc LIMIT 25");

                            // if(count($users)>0){$i=1;

                            //     foreach ($users as $key => $value) {

                            //         ?><tr>

                            //             <td><?=$i?></td>

                            //             <td><?= $value["name"]?></td>

                            //             <td><?= $value["mobile"]?></td>                                                                                

                            //         </tr><?php $i++;

                            //     }

                            // }

                            ?>                        

                        </tbody>

                    </table>

                </div>

                </div> -->

               <!-- <div class="col-md-6" style="padding: 5px;"> -->

                <!-- <div class="card" style="padding: 10px;">                     -->

                <!-- <h2>Recent Payments</h2> -->

                        <!-- <table class="table table-bordered table-striped table-hover mgt-20"> -->

                                              

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            

        </div>

        <!-- /#page-wrapper -->



    </div>

    <!-- /#wrapper -->



    <?php include('footer.php'); ?>



</body>



</html>

