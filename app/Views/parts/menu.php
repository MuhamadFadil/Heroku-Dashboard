<?php
// $at = basename($_SERVER['PHP_SELF'], ".php");
// $at = $this->uri->segment(1);
// $at2 = $this->uri->segment(2);
// $ro=$this->session->role;
if (isset($_SESSION['LAST_ACTIVITY'])) {
	$uri =  explode("/", uri_string());
	$at = "";
	$at2 = "";
	$i = 0;
	foreach ($uri as $wow) {
		if ($i == 0) {
			$at = $wow;
		} else if ($i == 1) {
			$at2 = $wow;
		}
		$i = $i + 1;
	}
?>
	<ul class="sidebar-menu">
		<?php if (in_array($_SESSION['DATA_SESSION']['role'], array('Admin'))) { ?>
		
			<!--<li class="<?= ($at == 'dashboard' || $at == '') ? 'active' : ''; ?>"><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>-->
			
			<!--<li class="<?= ($at == 'activity') ? 'active' : ''; ?>"><a href="<?php echo base_url('AddActivity/index'); ?>"><i class="fa fa-trophy"></i><span>Add Activity</a></li>-->
			
			<!--<li class="<?= ($at == 'aktivitas') ? 'active' : ''; ?>"><a href="<?php echo base_url('aktivitas/index'); ?>"><i class="fa fa-trophy"></i><span>Aktivitas</span></a></li>-->
			
			<li class="treeview <?= $at == 'users' ? 'active' : ''; ?>"><a href="#"><i class="fa fa-users"></i><span>User Management</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
				<ul class="treeview-menu">
					<li class="<?= ($at == 'users' & $at2 == 'all') ? 'active' : ''; ?>"><a href="<?= base_url('users/index'); ?>">Manage User</a></li>
					 <!--<li class="<?= ($at == 'users' & $at2 == '') ? 'active' : ''; ?>"><a href="<?= base_url('users/index'); ?>">Manage User2</a></li> -->
				</ul>
			</li>

			<li class="treeview <?= $at == 'setting' ? 'active' : ''; ?>"><a href="#"><i class="fa fa-wrench"></i><span>Kirim Pesan</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
				<ul class="treeview-menu">
					<li class="<?= ($at == 'setting' & $at2 == 'all') ? 'active' : ''; ?>"><a href="<?= base_url('setting/index'); ?>">Data Subscriber</a></li>
					<!-- <li class="<?= ($at == 'setting' & $at2 == '') ? 'active' : ''; ?>"><a href="<?= base_url('setting/index'); ?>">Privacy</a></li> -->
				</ul>
			</li>

		<?php }else{ ?>
			<li class="<?= ($at == 'dashboard' || $at == '') ? 'active' : ''; ?>"><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

			<li class="treeview <?= $at == 'setting' ? 'active' : ''; ?>"><a href="#"><i class="fa fa-wrench"></i><span>Privasi dan Pengaturan</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
				<ul class="treeview-menu">
					<li class="<?= ($at == 'setting') ? 'active' : ''; ?>"><a href="<?= base_url('setting/client'); ?>">Pengaturan</a></li>
					<!-- <li class="<?= ($at == 'setting' & $at2 == '') ? 'active' : ''; ?>"><a href="<?= base_url('setting/index'); ?>">Privacy</a></li> -->
				</ul>
			</li>
		<?php } ?>
	</ul>
<?php } ?>