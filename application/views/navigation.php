<?php
echo $groupuser =  $_SESSION['level_user'];
?>
<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						
						<?php if ($groupuser == "01" ) { ?>
						<li><a href="<?php echo base_url().'index.php/dash'; ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="<?php echo base_url().'index.php/terima'; ?>"><i class="icon-envelope"></i><span class="hidden-tablet"> Penerimaan</span></a></li>
						<li><a href="<?php echo base_url().'index.php/tolak'; ?>"><i class="icon-tasks"></i><span class="hidden-tablet"> Penolakan</span></a></li>
						<li><a href="<?php echo base_url().'index.php/laporan'; ?>"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Laporan </span></a></li>
						
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Utility</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url().'index.php/jns_grat'; ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Jenis Gratifikasi</span></a></li>
								<!--<li><a class="submenu" href="<?php echo base_url().'index.php/manuser'; ?>"><i class="icon-file-alt"></i><span class="hidden-tablet">Manajemen User</span></a></li> -->
								<li><a class="submenu" href="<?php echo base_url().'index.php/log_grat'; ?>"><i class="icon-file-alt"></i><span class="hidden-tablet">Log User</span></a></li>
								
							</ul>	
						</li>
						<?php
						}
						else
						{
						?>
						<li><a href="<?php echo base_url().'index.php/terima'; ?>"><i class="icon-envelope"></i><span class="hidden-tablet"> Penerimaan</span></a></li>
						<li><a href="<?php echo base_url().'index.php/tolak'; ?>"><i class="icon-tasks"></i><span class="hidden-tablet"> Penolakan</span></a></li>
						<?php
						}
						?>
						
						
					</ul>
				</div>
</div>

