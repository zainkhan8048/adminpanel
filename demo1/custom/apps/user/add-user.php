<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8" />
		<title>Add User | TMS | Technagers Management System</title>
		<?php include('../../../include/head.php'); ?>
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="../../../theme/html/demo1/dist/assets/css/pages/wizard/wizard-4afa4.css?v=7.2.0" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
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
				<!--begin::Wrapper-->
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
								<div class="card card-custom card-transparent">
									<div class="card-body p-0">
										<!--begin::Wizard-->
										<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
											<!--begin::Wizard Nav-->
											<div class="wizard-nav">
												<div class="wizard-steps">
													<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
														<div class="wizard-wrapper">
															<div class="wizard-number">1</div>
															<div class="wizard-label">
																<div class="wizard-title">Profile</div>
																<div class="wizard-desc">User's Personal Information</div>
															</div>
														</div>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-wrapper">
															<div class="wizard-number">2</div>
															<div class="wizard-label">
																<div class="wizard-title">Account</div>
																<div class="wizard-desc">User's Account &amp; Settings</div>
															</div>
														</div>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-wrapper">
															<div class="wizard-number">3</div>
															<div class="wizard-label">
																<div class="wizard-title">Address</div>
																<div class="wizard-desc">User's Shipping Address</div>
															</div>
														</div>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-wrapper">
															<div class="wizard-number">4</div>
															<div class="wizard-label">
																<div class="wizard-title">Submission</div>
																<div class="wizard-desc">Review and Submit</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end::Wizard Nav-->
											<!--begin::Card-->
											<div class="card card-custom card-shadowless rounded-top-0">
												<!--begin::Body-->
												<div class="card-body p-0">
													<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
														<div class="col-xl-12 col-xxl-10">
															<!--begin::Wizard Form-->
															<form class="form" id="kt_form">
																<div class="row justify-content-center">
																	<div class="col-xl-9">
																		<!--begin::Wizard Step 1-->
																		<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
																			<h5 class="text-dark font-weight-bold mb-10">User's Profile Details:</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="image-input image-input-outline" id="kt_user_add_avatar">
																						<div class="image-input-wrapper" style="background-image: url(../../../../theme/html/demo1/dist/assets/media/users/100_6.jpg)"></div>
																						<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																							<i class="fa fa-pen icon-sm text-muted"></i>
																							<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
																							<input type="hidden" name="profile_avatar_remove" />
																						</label>
																						<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
																							<i class="ki ki-bold-close icon-xs text-muted"></i>
																						</span>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="firstname" type="text" value="" />
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="lastname" type="text" value="" />
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="companyname" type="text" value="Loop Inc." />
																					<span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-solid input-group-lg">
																						<div class="input-group-prepend">
																							<span class="input-group-text">
																								<i class="la la-phone"></i>
																							</span>
																						</div>
																						<input type="text" class="form-control form-control-solid form-control-lg" name="phone" value="5678967456" placeholder="Phone" />
																					</div>
																					<span class="form-text text-muted">Enter valid US phone number(e.g: 5678967456).</span>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-solid input-group-lg">
																						<div class="input-group-prepend">
																							<span class="input-group-text">
																								<i class="la la-at"></i>
																							</span>
																						</div>
																						<input type="text" class="form-control form-control-solid form-control-lg" name="email" value="" />
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Company Site</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-solid input-group-lg">
																						<input type="text" class="form-control form-control-solid form-control-lg" name="companywebsite" placeholder="Username" value="loop" />
																						<div class="input-group-append">
																							<span class="input-group-text">.com</span>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																		</div>
																		<!--end::Wizard Step 1-->
																		<!--begin::Wizard Step 2-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="text-dark font-weight-bold mb-10 mt-5">User's Account Details</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Language</label>
																				<div class="col-xl-9 col-lg-9">
																					<select class="form-control form-control-lg form-control-solid" name="language">
																						<option value="">Select Language...</option>
																						<option value="id">Bahasa Indonesia - Indonesian</option>
																						<option value="msa">Bahasa Melayu - Malay</option>
																						<option value="ca">Català - Catalan</option>
																						<option value="cs">Čeština - Czech</option>
																						<option value="da">Dansk - Danish</option>
																						<option value="de">Deutsch - German</option>
																						<option value="en" selected="selected">English</option>
																						<option value="en-gb">English UK - British English</option>
																						<option value="es">Español - Spanish</option>
																						<option value="eu">Euskara - Basque (beta)</option>
																						<option value="fil">Filipino</option>
																						<option value="fr">Français - French</option>
																						<option value="ga">Gaeilge - Irish (beta)</option>
																						<option value="gl">Galego - Galician (beta)</option>
																						<option value="hr">Hrvatski - Croatian</option>
																						<option value="it">Italiano - Italian</option>
																						<option value="hu">Magyar - Hungarian</option>
																						<option value="nl">Nederlands - Dutch</option>
																						<option value="no">Norsk - Norwegian</option>
																						<option value="pl">Polski - Polish</option>
																						<option value="pt">Português - Portuguese</option>
																						<option value="ro">Română - Romanian</option>
																						<option value="sk">Slovenčina - Slovak</option>
																						<option value="fi">Suomi - Finnish</option>
																						<option value="sv">Svenska - Swedish</option>
																						<option value="vi">Tiếng Việt - Vietnamese</option>
																						<option value="tr">Türkçe - Turkish</option>
																						<option value="el">Ελληνικά - Greek</option>
																						<option value="bg">Български език - Bulgarian</option>
																						<option value="ru">Русский - Russian</option>
																						<option value="sr">Српски - Serbian</option>
																						<option value="uk">Українська мова - Ukrainian</option>
																						<option value="he">עִבְרִית - Hebrew</option>
																						<option value="ur">اردو - Urdu (beta)</option>
																						<option value="ar">العربية - Arabic</option>
																						<option value="fa">فارسی - Persian</option>
																						<option value="mr">मराठी - Marathi</option>
																						<option value="hi">हिन्दी - Hindi</option>
																						<option value="bn">বাংলা - Bangla</option>
																						<option value="gu">ગુજરાતી - Gujarati</option>
																						<option value="ta">தமிழ் - Tamil</option>
																						<option value="kn">ಕನ್ನಡ - Kannada</option>
																						<option value="th">ภาษาไทย - Thai</option>
																						<option value="ko">한국어 - Korean</option>
																						<option value="ja">日本語 - Japanese</option>
																						<option value="zh-cn">简体中文 - Simplified Chinese</option>
																						<option value="zh-tw">繁體中文 - Traditional Chinese</option>
																					</select>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Time Zone</label>
																				<div class="col-xl-9 col-lg-9">
																					<select class="form-control form-control-lg form-control-solid" name="timezone">
																						<option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
																						<option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
																						<option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
																						<option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
																						<option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
																						<option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
																						<option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
																						<option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
																						<option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
																						<option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
																						<option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
																						<option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
																						<option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
																						<option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
																						<option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
																						<option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
																						<option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
																						<option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
																						<option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
																						<option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
																						<option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
																						<option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
																						<option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
																						<option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
																						<option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
																						<option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
																						<option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
																						<option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
																						<option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
																						<option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
																						<option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
																						<option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
																						<option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
																						<option data-offset="0" value="Azores">(GMT) Azores</option>
																						<option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
																						<option data-offset="0" value="UTC">(GMT) UTC</option>
																						<option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
																						<option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
																						<option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
																						<option data-offset="3600" value="London">(GMT+01:00) London</option>
																						<option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
																						<option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
																						<option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
																						<option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
																						<option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
																						<option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
																						<option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
																						<option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
																						<option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
																						<option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
																						<option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
																						<option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
																						<option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
																						<option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
																						<option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
																						<option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
																						<option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
																						<option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
																						<option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
																						<option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
																						<option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
																						<option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
																						<option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
																						<option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
																						<option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
																						<option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
																						<option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
																						<option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
																						<option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
																						<option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
																						<option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
																						<option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
																						<option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
																						<option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
																						<option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
																						<option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
																						<option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
																						<option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
																						<option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
																						<option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
																						<option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
																						<option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
																						<option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
																						<option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
																						<option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
																						<option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
																						<option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
																						<option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
																						<option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
																						<option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
																						<option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
																						<option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
																						<option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
																						<option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
																						<option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
																						<option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
																						<option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
																						<option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
																						<option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
																						<option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
																						<option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
																						<option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
																						<option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
																						<option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
																						<option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
																						<option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
																						<option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
																						<option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
																						<option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
																						<option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
																						<option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
																						<option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
																						<option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
																						<option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
																						<option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
																						<option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
																						<option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
																						<option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
																						<option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
																						<option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
																						<option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
																						<option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
																						<option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
																						<option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
																						<option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
																						<option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
																						<option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
																						<option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
																						<option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
																						<option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
																						<option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
																						<option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
																						<option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
																						<option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
																						<option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
																						<option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
																						<option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
																						<option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
																						<option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
																						<option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
																						<option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
																						<option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
																						<option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
																					</select>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Communication</label>
																				<div class="col-xl-9 col-lg-9 col-form-label">
																					<div class="checkbox-inline">
																						<label class="checkbox">
																						<input name="communication" type="checkbox" />
																						<span></span>Email</label>
																						<label class="checkbox">
																						<input name="communication" type="checkbox" />
																						<span></span>SMS</label>
																						<label class="checkbox">
																						<input name="communication" type="checkbox" />
																						<span></span>Phone</label>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<div class="separator separator-dashed my-10"></div>
																			<h5 class="text-dark font-weight-bold mb-10">User's Account Settings</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Login verification</label>
																				<div class="col-xl-9 col-lg-9">
																					<button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
																					<div class="form-text text-muted mt-3">After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised. 
																					<a href="#">Learn more</a>.</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Password reset verification</label>
																				<div class="col-xl-9 col-lg-9">
																					<div class="checkbox-inline">
																						<label class="checkbox mb-2">
																						<input type="checkbox" />
																						<span></span>Require personal information to reset your password.</label>
																					</div>
																					<div class="form-text text-muted">For extra security, this requires you to confirm your email or phone number when you reset your password. 
																					<a href="#" class="font-weight-bold">Learn more</a>.</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row mt-10">
																				<label class="col-xl-3 col-lg-3"></label>
																				<div class="col-xl-9 col-lg-9">
																					<button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your account ?</button>
																				</div>
																			</div>
																			<!--end::Group-->
																		</div>
																		<!--end::Wizard Step 2-->
																		<!--begin::Wizard Step 3-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="mb-10 font-weight-bold text-dark">Setup Your Address</h5>
																			<!--begin::Group-->
																			<div class="form-group">
																				<label>Address Line 1</label>
																				<input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1" value="Address Line 1" />
																				<span class="form-text text-muted">Please enter your Address.</span>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group">
																				<label>Address Line 2</label>
																				<input type="text" class="form-control form-control-solid form-control-lg" name="address2" placeholder="Address Line 2" value="Address Line 2" />
																				<span class="form-text text-muted">Please enter your Address.</span>
																			</div>
																			<!--begin::Row-->
																			<div class="row">
																				<div class="col-xl-6">
																					<!--begin::Group-->
																					<div class="form-group">
																						<label>Postcode</label>
																						<input type="text" class="form-control form-control-solid form-control-lg" name="postcode" placeholder="Postcode" value="3000" />
																						<span class="form-text text-muted">Please enter your Postcode.</span>
																					</div>
																				</div>
																				<!--end::Group-->
																				<!--begin::Group-->
																				<div class="col-xl-6">
																					<div class="form-group">
																						<label>City</label>
																						<input type="text" class="form-control form-control-solid form-control-lg" name="city" placeholder="City" value="Melbourne" />
																						<span class="form-text text-muted">Please enter your City.</span>
																					</div>
																				</div>
																				<!--end::Group-->
																			</div>
																			<!--end::Row-->
																			<!--begin::Row-->
																			<div class="row">
																				<div class="col-xl-6">
																					<!--begin::Group-->
																					<div class="form-group">
																						<label>State</label>
																						<input type="text" class="form-control form-control-solid form-control-lg" name="state" placeholder="State" value="VIC" />
																						<span class="form-text text-muted">Please enter your State.</span>
																					</div>
																					<!--end::Group-->
																				</div>
																				<div class="col-xl-6">
																					<!--begin::Group-->
																					<div class="form-group">
																						<label>Country</label>
																						<select name="country" class="form-control form-control-solid form-control-lg">
																							<option value="">Select</option>
																							<option value="AF">Afghanistan</option>
																							<option value="AX">Åland Islands</option>
																							<option value="AL">Albania</option>
																							<option value="DZ">Algeria</option>
																							<option value="AS">American Samoa</option>
																							<option value="AD">Andorra</option>
																							<option value="AO">Angola</option>
																							<option value="AI">Anguilla</option>
																							<option value="AQ">Antarctica</option>
																							<option value="AG">Antigua and Barbuda</option>
																							<option value="AR">Argentina</option>
																							<option value="AM">Armenia</option>
																							<option value="AW">Aruba</option>
																							<option value="AU" selected="selected">Australia</option>
																							<option value="AT">Austria</option>
																							<option value="AZ">Azerbaijan</option>
																							<option value="BS">Bahamas</option>
																							<option value="BH">Bahrain</option>
																							<option value="BD">Bangladesh</option>
																							<option value="BB">Barbados</option>
																							<option value="BY">Belarus</option>
																							<option value="BE">Belgium</option>
																							<option value="BZ">Belize</option>
																							<option value="BJ">Benin</option>
																							<option value="BM">Bermuda</option>
																							<option value="BT">Bhutan</option>
																							<option value="BO">Bolivia, Plurinational State of</option>
																							<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																							<option value="BA">Bosnia and Herzegovina</option>
																							<option value="BW">Botswana</option>
																							<option value="BV">Bouvet Island</option>
																							<option value="BR">Brazil</option>
																							<option value="IO">British Indian Ocean Territory</option>
																							<option value="BN">Brunei Darussalam</option>
																							<option value="BG">Bulgaria</option>
																							<option value="BF">Burkina Faso</option>
																							<option value="BI">Burundi</option>
																							<option value="KH">Cambodia</option>
																							<option value="CM">Cameroon</option>
																							<option value="CA">Canada</option>
																							<option value="CV">Cape Verde</option>
																							<option value="KY">Cayman Islands</option>
																							<option value="CF">Central African Republic</option>
																							<option value="TD">Chad</option>
																							<option value="CL">Chile</option>
																							<option value="CN">China</option>
																							<option value="CX">Christmas Island</option>
																							<option value="CC">Cocos (Keeling) Islands</option>
																							<option value="CO">Colombia</option>
																							<option value="KM">Comoros</option>
																							<option value="CG">Congo</option>
																							<option value="CD">Congo, the Democratic Republic of the</option>
																							<option value="CK">Cook Islands</option>
																							<option value="CR">Costa Rica</option>
																							<option value="CI">Côte d'Ivoire</option>
																							<option value="HR">Croatia</option>
																							<option value="CU">Cuba</option>
																							<option value="CW">Curaçao</option>
																							<option value="CY">Cyprus</option>
																							<option value="CZ">Czech Republic</option>
																							<option value="DK">Denmark</option>
																							<option value="DJ">Djibouti</option>
																							<option value="DM">Dominica</option>
																							<option value="DO">Dominican Republic</option>
																							<option value="EC">Ecuador</option>
																							<option value="EG">Egypt</option>
																							<option value="SV">El Salvador</option>
																							<option value="GQ">Equatorial Guinea</option>
																							<option value="ER">Eritrea</option>
																							<option value="EE">Estonia</option>
																							<option value="ET">Ethiopia</option>
																							<option value="FK">Falkland Islands (Malvinas)</option>
																							<option value="FO">Faroe Islands</option>
																							<option value="FJ">Fiji</option>
																							<option value="FI">Finland</option>
																							<option value="FR">France</option>
																							<option value="GF">French Guiana</option>
																							<option value="PF">French Polynesia</option>
																							<option value="TF">French Southern Territories</option>
																							<option value="GA">Gabon</option>
																							<option value="GM">Gambia</option>
																							<option value="GE">Georgia</option>
																							<option value="DE">Germany</option>
																							<option value="GH">Ghana</option>
																							<option value="GI">Gibraltar</option>
																							<option value="GR">Greece</option>
																							<option value="GL">Greenland</option>
																							<option value="GD">Grenada</option>
																							<option value="GP">Guadeloupe</option>
																							<option value="GU">Guam</option>
																							<option value="GT">Guatemala</option>
																							<option value="GG">Guernsey</option>
																							<option value="GN">Guinea</option>
																							<option value="GW">Guinea-Bissau</option>
																							<option value="GY">Guyana</option>
																							<option value="HT">Haiti</option>
																							<option value="HM">Heard Island and McDonald Islands</option>
																							<option value="VA">Holy See (Vatican City State)</option>
																							<option value="HN">Honduras</option>
																							<option value="HK">Hong Kong</option>
																							<option value="HU">Hungary</option>
																							<option value="IS">Iceland</option>
																							<option value="IN">India</option>
																							<option value="ID">Indonesia</option>
																							<option value="IR">Iran, Islamic Republic of</option>
																							<option value="IQ">Iraq</option>
																							<option value="IE">Ireland</option>
																							<option value="IM">Isle of Man</option>
																							<option value="IL">Israel</option>
																							<option value="IT">Italy</option>
																							<option value="JM">Jamaica</option>
																							<option value="JP">Japan</option>
																							<option value="JE">Jersey</option>
																							<option value="JO">Jordan</option>
																							<option value="KZ">Kazakhstan</option>
																							<option value="KE">Kenya</option>
																							<option value="KI">Kiribati</option>
																							<option value="KP">Korea, Democratic People's Republic of</option>
																							<option value="KR">Korea, Republic of</option>
																							<option value="KW">Kuwait</option>
																							<option value="KG">Kyrgyzstan</option>
																							<option value="LA">Lao People's Democratic Republic</option>
																							<option value="LV">Latvia</option>
																							<option value="LB">Lebanon</option>
																							<option value="LS">Lesotho</option>
																							<option value="LR">Liberia</option>
																							<option value="LY">Libya</option>
																							<option value="LI">Liechtenstein</option>
																							<option value="LT">Lithuania</option>
																							<option value="LU">Luxembourg</option>
																							<option value="MO">Macao</option>
																							<option value="MK">Macedonia, the former Yugoslav Republic of</option>
																							<option value="MG">Madagascar</option>
																							<option value="MW">Malawi</option>
																							<option value="MY">Malaysia</option>
																							<option value="MV">Maldives</option>
																							<option value="ML">Mali</option>
																							<option value="MT">Malta</option>
																							<option value="MH">Marshall Islands</option>
																							<option value="MQ">Martinique</option>
																							<option value="MR">Mauritania</option>
																							<option value="MU">Mauritius</option>
																							<option value="YT">Mayotte</option>
																							<option value="MX">Mexico</option>
																							<option value="FM">Micronesia, Federated States of</option>
																							<option value="MD">Moldova, Republic of</option>
																							<option value="MC">Monaco</option>
																							<option value="MN">Mongolia</option>
																							<option value="ME">Montenegro</option>
																							<option value="MS">Montserrat</option>
																							<option value="MA">Morocco</option>
																							<option value="MZ">Mozambique</option>
																							<option value="MM">Myanmar</option>
																							<option value="NA">Namibia</option>
																							<option value="NR">Nauru</option>
																							<option value="NP">Nepal</option>
																							<option value="NL">Netherlands</option>
																							<option value="NC">New Caledonia</option>
																							<option value="NZ">New Zealand</option>
																							<option value="NI">Nicaragua</option>
																							<option value="NE">Niger</option>
																							<option value="NG">Nigeria</option>
																							<option value="NU">Niue</option>
																							<option value="NF">Norfolk Island</option>
																							<option value="MP">Northern Mariana Islands</option>
																							<option value="NO">Norway</option>
																							<option value="OM">Oman</option>
																							<option value="PK">Pakistan</option>
																							<option value="PW">Palau</option>
																							<option value="PS">Palestinian Territory, Occupied</option>
																							<option value="PA">Panama</option>
																							<option value="PG">Papua New Guinea</option>
																							<option value="PY">Paraguay</option>
																							<option value="PE">Peru</option>
																							<option value="PH">Philippines</option>
																							<option value="PN">Pitcairn</option>
																							<option value="PL">Poland</option>
																							<option value="PT">Portugal</option>
																							<option value="PR">Puerto Rico</option>
																							<option value="QA">Qatar</option>
																							<option value="RE">Réunion</option>
																							<option value="RO">Romania</option>
																							<option value="RU">Russian Federation</option>
																							<option value="RW">Rwanda</option>
																							<option value="BL">Saint Barthélemy</option>
																							<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
																							<option value="KN">Saint Kitts and Nevis</option>
																							<option value="LC">Saint Lucia</option>
																							<option value="MF">Saint Martin (French part)</option>
																							<option value="PM">Saint Pierre and Miquelon</option>
																							<option value="VC">Saint Vincent and the Grenadines</option>
																							<option value="WS">Samoa</option>
																							<option value="SM">San Marino</option>
																							<option value="ST">Sao Tome and Principe</option>
																							<option value="SA">Saudi Arabia</option>
																							<option value="SN">Senegal</option>
																							<option value="RS">Serbia</option>
																							<option value="SC">Seychelles</option>
																							<option value="SL">Sierra Leone</option>
																							<option value="SG">Singapore</option>
																							<option value="SX">Sint Maarten (Dutch part)</option>
																							<option value="SK">Slovakia</option>
																							<option value="SI">Slovenia</option>
																							<option value="SB">Solomon Islands</option>
																							<option value="SO">Somalia</option>
																							<option value="ZA">South Africa</option>
																							<option value="GS">South Georgia and the South Sandwich Islands</option>
																							<option value="SS">South Sudan</option>
																							<option value="ES">Spain</option>
																							<option value="LK">Sri Lanka</option>
																							<option value="SD">Sudan</option>
																							<option value="SR">Suriname</option>
																							<option value="SJ">Svalbard and Jan Mayen</option>
																							<option value="SZ">Swaziland</option>
																							<option value="SE">Sweden</option>
																							<option value="CH">Switzerland</option>
																							<option value="SY">Syrian Arab Republic</option>
																							<option value="TW">Taiwan, Province of China</option>
																							<option value="TJ">Tajikistan</option>
																							<option value="TZ">Tanzania, United Republic of</option>
																							<option value="TH">Thailand</option>
																							<option value="TL">Timor-Leste</option>
																							<option value="TG">Togo</option>
																							<option value="TK">Tokelau</option>
																							<option value="TO">Tonga</option>
																							<option value="TT">Trinidad and Tobago</option>
																							<option value="TN">Tunisia</option>
																							<option value="TR">Turkey</option>
																							<option value="TM">Turkmenistan</option>
																							<option value="TC">Turks and Caicos Islands</option>
																							<option value="TV">Tuvalu</option>
																							<option value="UG">Uganda</option>
																							<option value="UA">Ukraine</option>
																							<option value="AE">United Arab Emirates</option>
																							<option value="GB">United Kingdom</option>
																							<option value="US">United States</option>
																							<option value="UM">United States Minor Outlying Islands</option>
																							<option value="UY">Uruguay</option>
																							<option value="UZ">Uzbekistan</option>
																							<option value="VU">Vanuatu</option>
																							<option value="VE">Venezuela, Bolivarian Republic of</option>
																							<option value="VN">Viet Nam</option>
																							<option value="VG">Virgin Islands, British</option>
																							<option value="VI">Virgin Islands, U.S.</option>
																							<option value="WF">Wallis and Futuna</option>
																							<option value="EH">Western Sahara</option>
																							<option value="YE">Yemen</option>
																							<option value="ZM">Zambia</option>
																							<option value="ZW">Zimbabwe</option>
																						</select>
																					</div>
																					<!--end::Group-->
																				</div>
																			</div>
																		</div>
																		<!--end::Wizard Step 3-->
																		<!--begin::Wizard Step 4-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h5>
																			<!--begin::Item-->
																			<div class="border-bottom mb-5 pb-5">
																				<div class="font-weight-bolder mb-3">Your Account Details:</div>
																				<div class="line-height-xl">John Wick 
																				<br />Phone: +61412345678 
																				<br />Email: johnwick@reeves.com</div>
																			</div>
																			<!--end::Item-->
																			<!--begin::Item-->
																			<div class="border-bottom mb-5 pb-5">
																				<div class="font-weight-bolder mb-3">Your Address Details:</div>
																				<div class="line-height-xl">Address Line 1 
																				<br />Address Line 2 
																				<br />Melbourne 3000, VIC, Australia</div>
																			</div>
																			<!--end::Item-->
																			<!--begin::Item-->
																			<div>
																				<div class="font-weight-bolder">Payment Details:</div>
																				<div class="line-height-xl">Card Number: xxxx xxxx xxxx 1111 
																				<br />Card Name: John Wick 
																				<br />Card Expiry: 01/21</div>
																			</div>
																			<!--end::Item-->
																		</div>
																		<!--end::Wizard Step 4-->
																		<!--begin::Wizard Actions-->
																		<div class="d-flex justify-content-between border-top pt-10 mt-15">
																			<div class="mr-2">
																				<button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">Previous</button>
																			</div>
																			<div>
																				<button type="button" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Submit</button>
																				<button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">Next</button>
																			</div>
																		</div>
																		<!--end::Wizard Actions-->
																	</div>
																</div>
															</form>
															<!--end::Wizard Form-->
														</div>
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Wizard-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021©</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark">
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<?php include '../../../include/user-panel.php';?>
		<!-- end::User Panel-->
		<!--begin::Quick Cart-->
		
		<!--end::Quick Cart-->
		<!--begin::Quick Panel-->
		
		<!--end::Quick Panel-->
		<!--begin::Chat Panel-->
		<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<!--begin::Card-->
					<div class="card card-custom">
						<!--begin::Header-->
						<div class="card-header align-items-center px-4 py-3">
							<div class="text-left flex-grow-1">
								<!--begin::Dropdown Menu-->
								<div class="dropdown dropdown-inline">
									<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</button>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
													<span class="navi-text">New Group</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
													<span class="navi-text">Contacts</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Groups</span>
													<span class="navi-link-badge">
														<span class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Calls</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
													<span class="navi-text">Settings</span>
												</a>
											</li>
											<li class="navi-separator my-3"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
													<span class="navi-text">Help</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Privacy</span>
													<span class="navi-link-badge">
														<span class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown Menu-->
							</div>
							<div class="text-center flex-grow-1">
								<div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
								<div>
									<span class="label label-dot label-success"></span>
									<span class="font-weight-bold text-muted font-size-sm">Active</span>
								</div>
							</div>
							<div class="text-right flex-grow-1">
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
									<i class="ki ki-close icon-1x"></i>
								</button>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Scroll-->
							<div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
								<!--begin::Messages-->
								<div class="messages">
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="../../../../theme/html/demo1/dist/assets/media/users/300_12.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">2 Hours</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">3 minutes</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="../../../../theme/html/demo1/dist/assets/media/users/300_21.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
									</div>
									<!--end::Message Out-->
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="../../../../theme/html/demo1/dist/assets/media/users/300_21.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">40 seconds</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">Just now</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="../../../../theme/html/demo1/dist/assets/media/users/300_21.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
									</div>
									<!--end::Message Out-->
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="../../../../theme/html/demo1/dist/assets/media/users/300_12.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">40 seconds</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here: 
										<a href="#">https://github.com</a></div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">Just now</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="../../../../theme/html/demo1/dist/assets/media/users/300_21.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
									</div>
									<!--end::Message Out-->
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="../../../../theme/html/demo1/dist/assets/media/users/300_12.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">40 seconds</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">Just now</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="../../../../theme/html/demo1/dist/assets/media/users/300_21.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
									</div>
									<!--end::Message Out-->
								</div>
								<!--end::Messages-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="card-footer align-items-center">
							<!--begin::Compose-->
							<textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
							<div class="d-flex align-items-center justify-content-between mt-5">
								<div class="mr-3">
									<a href="#" class="btn btn-clean btn-icon btn-md mr-1">
										<i class="flaticon2-photograph icon-lg"></i>
									</a>
									<a href="#" class="btn btn-clean btn-icon btn-md">
										<i class="flaticon2-photo-camera icon-lg"></i>
									</a>
								</div>
								<div>
									<button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
								</div>
							</div>
							<!--begin::Compose-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
			</div>
		</div>
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

		<!--begin::Demo Panel-->
		<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
				<h4 class="font-weight-bold m-0">Select A Demo</h4>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content">
				<!--begin::Wrapper-->
				<div class="offcanvas-wrapper mb-5 scroll-pull">
					<h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo1.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="../../../rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo2.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo2/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo2/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo3.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo3/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo3/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo4.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo4/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo4/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo5.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo5/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo5/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo6.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo6/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo6/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo7.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo7/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo7/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo8.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo8/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo8/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo9.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo9/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo9/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo10.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo10/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo10/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo11.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo11/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo11/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo12.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo12/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo12/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo13.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://preview.keenthemes.com/metronic/demo13/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
							<a href="https://preview.keenthemes.com/metronic/demo13/rtl/custom/apps/user/add-user.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo14.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo15.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo16.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo17.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo18.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo19.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo20.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo21.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo22.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo23.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo24.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo25.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo26.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo27.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo28.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo29.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="../../../../theme/html/demo1/dist/assets/media/demos/demo30.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
				</div>
				<!--end::Wrapper-->
				<!--begin::Purchase-->
				<div class="offcanvas-footer">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
				</div>
				<!--end::Purchase-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Demo Panel-->
		
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="../../../../theme/html/demo1/dist/assets/plugins/global/plugins.bundleafa4.js?v=7.2.0"></script>
		<script src="../../../../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundleafa4.js?v=7.2.0"></script>
		<script src="../../../../theme/html/demo1/dist/assets/js/scripts.bundleafa4.js?v=7.2.0"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="../../../../theme/html/demo1/dist/assets/js/pages/custom/user/add-userafa4.js?v=7.2.0"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/custom/apps/user/add-user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2021 13:39:10 GMT -->
</html>