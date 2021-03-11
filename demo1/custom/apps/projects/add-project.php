<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	
<!-- Mirrored from preview.keenthemes.com/metronic/demo1/custom/apps/projects/add-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2021 13:40:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		
		<meta charset="utf-8" />
		<title>Add Project | Keenthemes</title>
		<meta name="description" content="Add project page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="../../../../theme/html/demo1/dist/assets/css/pages/wizard/wizard-1afa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="../../../../theme/html/demo1/dist/assets/plugins/global/plugins.bundleafa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundleafa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/html/demo1/dist/assets/css/style.bundleafa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="../../../../theme/html/demo1/dist/assets/css/themes/layout/header/base/lightafa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/html/demo1/dist/assets/css/themes/layout/header/menu/lightafa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/html/demo1/dist/assets/css/themes/layout/brand/darkafa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/html/demo1/dist/assets/css/themes/layout/aside/darkafa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		
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
														<span class="svg-icon svg-icon-xl wizard-arrow">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Devices/Display1.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<h3 class="wizard-title">Project Requirments</h3>
														</div>
														<span class="svg-icon svg-icon-xl wizard-arrow">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Globe.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<h3 class="wizard-title">Delivery Details</h3>
														</div>
														<span class="svg-icon svg-icon-xl wizard-arrow">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Notification2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
																		<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<h3 class="wizard-title">Review and Submit</h3>
														</div>
														<span class="svg-icon svg-icon-xl wizard-arrow last">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
												</div>
											</div>
											<!--end::Wizard Nav-->
											<!--begin::Wizard Body-->
											<div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
												<div class="col-xl-12 col-xxl-7">
													<!--begin::Form Wizard-->
													<form class="form" id="kt_projects_add_form">
														<!--begin::Step 1-->
														<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
															<h3 class="mb-10 font-weight-bold text-dark">Project Details:</h3>
															<div class="row">
																<div class="col-xl-12">
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Project Title</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="form-control form-control-lg form-control-solid" name="projectname" type="text"/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Project Source</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="form-control form-control-lg form-control-solid" name="projectowner" type="text"/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Project Cost</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="form-control form-control-lg form-control-solid" name="customername" type="text"/>
																		</div>
																	</div>

																</div>
															</div>
														</div>
														<!--end::Step 1-->
														<!--begin::Step 2-->
														<div class="pb-5" data-wizard-type="step-content">
															<div class="row">
																<div class="col-xl-12">
																	<div class="form-group row">
																		<div class="col-lg-9 col-xl-6">
																			<h3 class="mb-10 font-weight-bold text-dark">Project Requirments</h3>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Project Type</label>
																		<div class="col-lg-9 col-xl-9">
																			<select name="language" class="form-control form-control-lg form-control-solid">
																				<option>Select Project Type...</option>
																				<option value="id">Website Development</option>
																				<option value="id">Desktop Application</option>
																				<option value="msa">Web Application</option>
																				<option value="ca">Mobile Application</option>
																				
																			</select>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Project Technology</label>
																		<div class="col-lg-9 col-xl-9">
																			<select name="timezone" class="form-control form-control-lg form-control-solid">
																				<option>Select Technology...</option>												
																				<option data-offset="-39600" value="International Date Line West">PHP</option>
																				<option data-offset="-39600" value="Midway Island">ASP.Net</option>
																				<option data-offset="-39600" value="Samoa">VB.Net</option>
																				<option data-offset="46800" value="Nuku'alofa">Laravel</option>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Step 2-->
														<!--begin::Step 3-->
														<div class="pb-5" data-wizard-type="step-content">
															<h3 class="mb-10 font-weight-bold text-dark">Delivery Details</h3>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Deadlines</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="form-control form-control-lg form-control-solid" name="deadline" type="date" />
																		</div>
																	</div>
															<div class="row">
																<div class="col-xl-6">
																	
																</div>
															</div>
														</div>
														<!--end::Step 3-->
														<!--begin::Step 4-->
														<div class="pb-5" data-wizard-type="step-content">
															<h4 class="mb-10 font-weight-bold">Review your Details and Submit</h4>
															<h6 class="font-weight-bold mb-3">Project Details:</h6>
															<table class="w-100">
																<tr>
																	<td class="font-weight-bold text-muted">Name:</td>
																	<td class="font-weight-bold text-right">Loop Inc CRM App</td>
																</tr>
																<tr>
																	<td class="font-weight-bold text-muted">Phone:</td>
																	<td class="font-weight-bold text-right">+61412345678</td>
																</tr>
																<tr>
																	<td class="font-weight-bold text-muted">Email:</td>
																	<td class="font-weight-bold text-right">johnwick@reeves.com</td>
																</tr>
															</table>
															<div class="separator separator-dashed my-5"></div>
															<h6 class="font-weight-bold mb-3">Delivery Info:</h6>
															<table class="w-100">
																<tr>
																	<td class="font-weight-bold text-muted">Address Line 1:</td>
																	<td class="font-weight-bold text-right">Fox Avenue 5-6B</td>
																</tr>
																<tr>
																	<td class="font-weight-bold text-muted">Address Line 2:</td>
																	<td class="font-weight-bold text-right">Melbourne VIC</td>
																</tr>
																<tr>
																	<td class="font-weight-bold text-muted">Post:</td>
																	<td class="font-weight-bold text-right">3000</td>
																</tr>
																<tr>
																	<td class="font-weight-bold text-muted">Country:</td>
																	<td class="font-weight-bold text-right">Australia</td>
																</tr>
															</table>
															<div class="separator separator-dashed my-5"></div>
															<h6 class="font-weight-bold mb-3">Payment Details:</h6>
															<table class="w-100">
																<tr>
																	<td class="font-weight-bold text-muted">Card Number:</td>
																	<td class="font-weight-bold text-right">xxxx xxxx xxxx 1111</td>
																</tr>
																<tr>
																	<td class="font-weight-bold text-muted">Card Name:</td>
																	<td class="font-weight-bold text-right">John Wick</td>
																</tr>
																<tr>
																	<td class="font-weight-bold text-muted">Card Expiry:</td>
																	<td class="font-weight-bold text-right">01/21</td>
																</tr>
															</table>
														</div>
														<!--end::Step 4-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-between border-top mt-5 pt-10">
															<div class="mr-2">
																<button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
															</div>
															<div>
																<button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
																<button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
															</div>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form Wizard-->
												</div>
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