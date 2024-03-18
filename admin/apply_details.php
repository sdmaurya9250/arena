<?php include "../config.php";

if (isset($_SESSION["success"]) && $_SESSION["success"] != "") {
    $stat["success"] = $_SESSION["success"];
    unset($_SESSION["success"]);
}

if (isset($_SESSION["error"]) && $_SESSION["error"] != "") {
    $stat["danger"] = $_SESSION["error"];
    unset($_SESSION["error"]);
}

$todaydate = date("Y-m-d");
if (isset($_POST["update"])){
    // $edit = $db->getRow("select * from apply_details where apply_id = '" .$_POST["tableid"] ."'");
    $data = [
        "fname" => $_POST["fname"],
        "lname" => $_POST["lname"],
        "address" => $_POST["address"],
        "city" => $_POST["city"],
        "pincode" => $_POST["pincode"],
        "dob" => $_POST["dob"],
        "email" => $_POST["email"],
        "mobile" => $_POST["mobile"],
        "fathername" => $_POST["fathername"],
        "fmobile" => $_POST["fmobile"],
        "course" => $_POST["course"],
        "check_list1" => $_POST["check_list1"],
        "check_list2" => $_POST["check_list2"],
        "check_list3" => $_POST["check_list3"],
    ];
    $rest = $db->updateAry("apply_details",$data,"where apply_id='" . $_POST["tableid"] . "'"
    );
    if (!is_null($rest)) {
        $_SESSION["success"] = "Updated successfully.";
        unset($_POST);
        redirect("apply_details.php");
    } else {
        $_SESSION["error"] = "Updation Failed !";
        redirect("apply_details.php");
    }
}
include "header.php";
?>
<style type="text/css">
div.dataTables_filter {  display: inline-block;float: right;}
div.dataTables_length {display: inline-block;}
.dt-buttons{display: inline-block;float: right;margin-left: 20px;}
.buttons-excel{
      background-color: green;
    color: white;
    border: none;
    padding: 7px 10px;
}
@media screen and (max-width: 600px){
  div.dataTables_filter {
      display: contents;
  }
}
span.select2.select2-container.select2-container--default{
  width: 100% !important;
}
</style>
</head>

<body>
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header light-blue dark white-text">
            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="title"><i class="fa fa-pencil-alt"></i> EDIT</h4>
        </div>
        <!--Body-->
        <div class="modal-body mb-0">
          <form method="post" id="featuredCategory" enctype="multipart/form-data">
            <div id="divLoad"></div>
            <div class="text-center">
              <button type="submit" name="update" id="btnUpdateCatg"  class=" btn btn-success button-update mgt-20"><i class="fa fa-check" aria-hidden="true"></i> Update
              </button>
              <button type="button" data-dismiss="modal" class="btn btn-warning button-cancel mgt-20"><i class="fa fa-times"></i> Cancel</button>
            </div>
            <br/>
          </form>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- modal ends -->
<!--------------------->
  <div id="wrapper">
      <!-- Navigation -->
     <?php include "menu.php"; ?>
      <!-- Page Content -->
      <div id="page-wrapper">
          <div class="container-fluid pdt-20">
            <?php //alert
if (isset($stat) && $stat != "") {
                echo msg($stat);
            } ?>
        <div class="row panel panel-default mgt-20">
          <div class="panel-heading">
            <h1 class="white-text page-heading">Apply Details</h1>
          </div>
          <div class="panel-body">
          <div class="ac_user_add">    
          <iframe  id="frame" style="display:none;" name="frame"> 
</iframe>
          <div class="row">
            <div class="">
              <div class="panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-bordered table-striped table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                            <th></th>
                          <th width="50px">S.No</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Course</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>DOB</th>
                          <th>City</th>
                          <th>Father Name</th>
                          <th>Father Mobile</th>
                          <th>Address</th>
                          <th>PinCode</th>
                          <th>Check_list1</th>
                          <th>Check_list2</th>
                          <th>Check_list3</th>
                          <th></th>
                          <th width="60px" class="text-center ac_user_edit ">Edit</th>
                          <th width="60px" class="text-center ac_user_delete">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $counter = 0;
                        $users = $db->getRows(
                            "SELECT apply_id, fname, lname, address, city,pincode,dob,email,mobile,fathername,fmobile,course,check_list1,check_list2,check_list3  from apply_details order by apply_id asc"
                        );
                        if (count($users) > 0) {
                            foreach ($users as $data) {
                                $id = $data["apply_id"];
                                $fname = $data["fname"];
                                $lname = $data["lname"];
                                $course = $data["course"];
                                $email = $data["email"];
                                $address = $data["address"];
                                $city = $data["city"];
                                $pincode = $data["pincode"];
                                $dob = $data["dob"];
                                $mobile = $data["mobile"];
                                $fathername = $data["fathername"];
                                $fmobile = $data["fmobile"];
                                $check_list1 = $data["check_list1"];
                                $check_list2 = $data["check_list2"];
                                $check_list3 = $data["check_list3"];
                                $counter++;
                                ?>
                              <tr class="odd gradeX">
                        <td><input type="checkbox" name="apply_details[]"  value="<?php echo $data["apply_id"]; ?>"></td>
                                <td><?php echo $counter; ?> </td>
                                <td><?php echo $fname; ?> </td>
                                <td><?php echo $lname; ?></td>
                                <td><?php echo $course; ?> </td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td> 
                                <td><?php echo $dob; ?></td>
                                <td><?php echo $city; ?></td>
                                <td><?php echo $fathername; ?> </td>
                                <td><?php echo $fmobile; ?> </td>
                                <td><?php echo $address; ?></td>
                                <td><?php echo $pincode; ?></td>
                                <td><?php echo $check_list1; ?></td>
                                <td><?php echo $check_list2; ?></td>
                                <td><?php echo $check_list3; ?></td>
                          <td></td> <?php  ?>
                                <td class="text-center ac_user_edit">
                                    <button class="123 btn btn-primary btn-circle  btnCategoryEdit" style="background: #2b3252;" data-toggle="modal" data-target="#myModal" name="edit" data-id="<?php echo $id; ?>" data-myvalue="<?php echo $id; ?>" ><i class="fa fa-pencil-alt"></i>
                                  </button>
                                            </td>
                                <td class="text-center ac_user_delete">
                                  <button type="button" id="delete" onclick="DeleteConfirmation(this,'apply_details')" name="delete" value="<?php echo $id; ?>" class="btn btn-danger btn-circle"><i class="fa fa-times"></i>
                                  </button>
                                </td>
                              </tr>
                              <?php
                            }
                        }
                        ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- /#footer -->
    <?php include "footer.php"; ?>
    <!-- /#ends -->


<script >
	$(document).ready(function() {
		$('select').select2();
	});

$(document).ready(function() {
	$("#ADD").click(function() {
		$("#content").toggle();
	});
	$('#dataTables-example').DataTable({
		responsive: true,
		dom: 'Blfrtip',
		buttons: ['excel'],
		paging: true,
		lengthChange: true,
	});
	// $("#content").toggle();

	$(document).ready(function() {
		$("#companyname").keyup(function() {
			var companyname = $(this).val().trim();
			if (companyname != '') {
				$.ajax({
					url: 'check.php',
					type: 'post',
					data: {
						companyname: companyname
					},
					success: function(response) {
						$('#cn_response').html(response);
					}
				});
			} else {
				$("#cn_response").html("");
			}
		});
	});



	$(document).ready(function() {
		$('#print').click(function() {
			var id = [];
			$(':checkbox:checked').each(function(i) {
				id[i] = $(this).val();
			});
			if (id.length === 0) //tell you if the array is empty
			{
				alert("Please Select atleast one checkbox");
			} else
			{
			
                $.ajax({
					url: 'courier.php',
					method: 'POST',
					data: {
						id: id
					},
					success: function(response) {
						var iframe = document.getElementById('frame'),
							iframedoc = iframe.contentDocument || iframe.contentWindow.document;
						    iframedoc.body.innerHTML = response;
						    frames['frame'].print()
						// $('#frame').html(response)
					}
					//else{
					//     $("#frame").html("");
					//  }
				});
			}
		});
	});

	$(document).on("click", ".btnCategoryEdit", function(event) {
		event.preventDefault();
		var value = $(this).attr('data-id');
		$.ajax({
				url: 'ajax.php',
				type: 'POST',
				data: 'action=edit_apply&id=' + value,
				dataType: 'html'
			})
			.done(function(data) {
				// console.log(data);  
				$('#divLoad').empty().append(data);
				$('select').select2();
			})

		$('#myModal').modal('show');
		return false;
	});
});








//Delete Record by Ajax

function DeleteConfirmation(e, tablename) {
	var id = e.value;
	// var tablename = 'attribute';
	// call jquery confirm plugin
	$.confirm({
		icon: 'fa fa-warning',
		title: 'Confirm!',
		content: 'Do you want to Delete ?',
		type: 'red',
		buttons: {
			confirm: {
				btnClass: 'btn-red',
				action: function() {
					$.confirm({
						icon: 'fa fa-warning',
						title: 'Confirm!',
						content: 'If you Delete, You cant restore this record !',
						type: 'red',
						buttons: {
							Okay: {
								btnClass: 'btn-red',
								action: function() {
									$.ajax({
										type: 'post',
										url: 'ajax.php',
										data: 'action=delete&Id=' + id + '&TableName=' + tablename,
										dataType: "json",
										success: function(data) {
											if (data['validation'] == '1') {
												$.confirm({
													icon: 'fa fa-check',
													title: '',
													content: data['message'],
													type: 'green',
													autoClose: 'Okay|1000',
													buttons: {
														Okay: function() {
															window.location.reload();
														}
													}
												});
											} else {
												$.alert(data['message']);
											}
										}
									});
								}
							},
							Cancel: function() {},
						}
					});
				}
			},
			cancel: function() {},
		}
	});
}


</script>


</body>



</html>

