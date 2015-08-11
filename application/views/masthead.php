<?php
$usern =  $_SESSION['nama_user'];
?>
<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				<a class="brand" href="#">
					<span>
						<img src="<?php echo base_url('img/log_pp3.png');?>" />  PT PELINDO III (PERSERO)
					</span>
					
				</a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
								<span class="badge red">
								<?php echo $jml_warning ; ?> </span>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>Ada <?php echo $jml_warning ; ?> Pemberitahuan</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
								
								
                            	<?php
								foreach ($warnings as $warning)
									{
										echo "
											<li>
												<a href='#'>
													<span class='avatar'><img src='".base_url()."/img/avatar.jpg' alt='Avatar'></span>
													<span class='header'>
													<span class='from'>
															".$warning['EMP_NAMA']."
														 </span>
														<span class='time'>
															".$warning['TGL_INPUT']."
														</span>
													</span>
													<span class='message'>
														Terdapat ".$warning['JENIS']." berupa ".$warning['JNS_GRAT']."
													</span>  
													
												</a>
											</li>
										";
										//$jml_w = $jml_w['JML'];
									} 
								?>
                                <li class="dropdown-menu-sub-footer">
                            		<a>Lihat Semua Pemberitahuan</a>
								</li>	
							</ul>
						</li>
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $usern; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								
								<li><a href="<?php echo base_url().'index.php/home/process_logout'; ?>"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>