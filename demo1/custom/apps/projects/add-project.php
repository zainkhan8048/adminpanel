<!DOCTYPE html>
<?php
  	ob_start();
  	session_start();

  	$user_id = $_SESSION['user_id'];

   	if(!isset($_SESSION['user_id']))
 	{
		//User not logged in. Redirect them back to the login page.
      	header("Location: ../../pages/login/login-4/login.php");
    	exit;
  	}

?>
<html lang="en">
	<!--begin::Head-->
	
<!-- Mirrored from preview.keenthemes.com/metronic/demo1/custom/apps/projects/add-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2021 13:40:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		
		<meta charset="utf-8" />
		<title>Add Project | TMS | Technagers Management System<</title>
		<meta name="description" content="Add project page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		
		 
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="../../../../theme/html/demo1/dist/assets/css/pages/wizard/wizard-1afa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->



		<?php include('../../../include/head.php'); ?>

		<!-- Hotjar Tracking Code for keenthemes.com -->
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<?php include '../../../include/header_mobile.php';?>
		<!--end::Header Mobile-->

		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<?php include '../../../include/brand_logo.php';?>
					<!--end::Brand-->

					<!--begin::Aside Menu-->
					<?php include '../../../include/aside-menu.php';?>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->


				
				<?php include '../../../include/project_subheader.php';?>
				<!--end::Subheader-->


				<!-- begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<?php include '../../../include/wrapper-header.php';?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<?php include '../../../include/project_subheader.php';?>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-body p-0">
										<div class="wizard wizard-1" id="kt_projects_add" data-wizard-state="step-first" data-wizard-clickable="true">
											<!--begin::Wizard Nav-->
											<div class="wizard-nav border-bottom">
												<div class="wizard-steps p-8 p-lg-10">
													<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
														<div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Chat-check.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<h3 class="wizard-title">Project Details</h3>
														</div>
														
													</div>
													
													<div class="wizard-step" data-wizard-type="step">
														
														
													</div>
													
												</div>
											</div>
											<!--end::Wizard Nav-->
<?php


	//include all fuctions file 1st...
	include '../../../scripts/function.php';
	
	//DB Connection
	$conn = db();




	if(isset($_POST['submit']))
	{

		$role_type = $_SESSION['role_type'];	
	//echo "<br/>";		
		//Retrieve the field values from our login form.
		
		$project_title = !empty($_POST['project_title']) ? trim($_POST['project_title']) : null;
		$project_source = !empty($_POST['project_source']) ? trim($_POST['project_source']) : null;
		$project_cost = !empty($_POST['project_cost']) ? trim($_POST['project_cost']) : null;
		$currency_id = !empty($_POST['currency_id']) ? trim($_POST['currency_id']) : null;
		$project_type_id = !empty($_POST['project_type_id']) ? trim($_POST['project_type_id']) : null;
		$project_technology = !empty($_POST['project_technology']) ? trim($_POST['project_technology']) : null;		
		$project_deadline = !empty($_POST['project_deadline']) ? trim($_POST['project_deadline']) : null;

	//Function calling here...
    	add_project($project_title, $project_source, $project_cost, $currency_id, $project_type_id, $project_technology, $project_deadline, $user_id);

		die();

	}
?>


											<!--begin::Wizard Body-->
											<div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
											<form class="form" id="kt_projects_add_form" style="width:70%" method="post" action="add-project.php">
														<!--begin::Step 1-->
														<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
															<h3 class="mb-10 font-weight-bold text-dark">Project Details:</h3>
															<div class="row">
																<div class="col-xl-12">
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Project Title</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="form-control form-control-lg form-control-solid" name="project_title" placeholder="Project Title*" type="text" />
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Project Source</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="form-control form-control-lg form-control-solid" name="project_source" placeholder="Project Source*" type="text"/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Project Cost</label>
																		<div class="col-lg-9 col-xl-4">
																			<input class="form-control form-control-lg form-control-solid"placeholder="00.0*" name="project_cost" type="number"/>
																		</div>

																		<!-- dropdown -->
																		<div class="col-lg-10 col-xl-5">
																			
    <select class="form-control form-control-lg form-control-solid" name="currency_id" id="currency_id" data-placeholder="Select Currency" >
    <option>Select Currency</option> 
        <?php

          echo $sql_currency = "SELECT currency_id, currency_code
                        		FROM tbl_currency";
          $stmt_role = $conn->prepare($sql_currency); 
          $result_role = $stmt_role->execute();
          $result_role = $stmt_role->fetchAll();

          foreach ($result_role as $row_role)
          {                        
            $currency_id = $row_role['currency_id'];
            echo "<option value='".$currency_id."'>".$row_role['currency_code']."</option>";
          }
        ?>        
    </select>

																			
																		
																		</div>
																		
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Project Type</label>
																		<div class="col-lg-9 col-xl-9">
																<select class="form-control form-control-lg form-control-solid" name="project_type_id" id="project_type_id">
																	<option>Select Project Type...</option>
														        <?php
														          echo $sql = "SELECT project_type_id, project_type
														                       FROM tbl_project_type";
														          $stmt = $conn->prepare($sql); 
														          $result = $stmt->execute();
														          $result = $stmt->fetchAll();

														          foreach ($result as $row)
														          {                        
														            $project_type_id = $row['project_type_id'];
														            echo "<option value='".$project_type_id."'>".$row['project_type']."</option>";
														          }
														        ?>  
																</select>
																		</div>
																		
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Technology Type</label>
                                                                       <div class="col-lg-9 col-xl-9">
                                                                            <input class="form-control form-control-lg form-control-solid" name="project_technology" type="Text" placeholder="Project Technology*" id="project_technology"/>
                                                                    	</div>
																	</div>
																	
																	
																	<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Deadlines</label>
																	<div class="col-lg-8 col-xl-9">
																			<input class="form-control form-control-lg form-control-solid" name="project_deadline" type="date" />
																		</div>
																	
																	<div class="pb-5" data-wizard-type="step-content">
																	<h3 class="mb-10 font-weight-bold text-dark">Delivery Details</h3>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Deadlines</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="form-control form-control-lg form-control-solid" name="deadline" type="date" />
																			<button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit now</button>
																		</div>
																		
														</div>
															
														</div>

																</div>
															</div>
														</div>
														<div class="d-flex justify-content-between border-top mt-5 pt-10">
															<div>
																
																<button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="act" name="submit">Submit</button>
															</div>
														</div>
													
														
														<!--end::Step 3-->
														<!--begin::Step 4-->
														
														<!--end::Step 4-->
														<!--begin::Actions-->
														
														<!--end::Actions-->
														</div>
													</form>
											</div>

											<!--end::Wizard Body-->
										</div>
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
						<?php include '../../../include/footer.php';?>
					
					<!--end::Footer-->
				</div>
				<!--end::Wrapper -->

				
				
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		

		<?php include '../../../include/user-panel.php';?>
		<!-- end::User Panel-->






		
		<!--begin::Quick Cart-->
		<?php include '../../../include/quick-cart.php';?>
		<!--end::Quick Cart-->

		<!--begin::Quick Panel-->
		<div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
			<!--begin::Header-->
			<div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
				<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
					</li>
				</ul>
				<div class="offcanvas-close mt-n1 pr-5">
					<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
						<i class="ki ki-close icon-xs text-muted"></i>
					</a>
				</div>
			</div>

			
			<!--end::Header-->
			<!--begin::Content-->
			<?php include '../../../include/content.php';?>
			<!--end::Content-->
		</div>
		<!--end::Quick Panel-->


		<!--begin::Chat Panel-->
		<?php include '../../../include/chat-panel.php';?>
		<!--end::Chat Panel-->










		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		
		<!--end::Sticky Toolbar-->




		<!--begin::Demo Panel-->
		<?php include '../../../include/demo-panel.php';?>
		<!--end::Demo Panel-->
		
		<!--begin::Global Config(global config for global JS scripts)-->
		<?php include '../../../include/scripts.php';?>
	</body>
	<!--end::Body-->


</html>