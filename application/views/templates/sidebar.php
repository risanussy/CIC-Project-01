 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-left" href="index.html">
    <div class="sidebar-brand-text mt-4 text-success">B-Community</div>
</a>
<br>

<!-- QUERY MENU -->
<?php
$role_id = $this->session->userdata('role_id'); 
$queryMenu = "SELECT `user_menu`.`id`, `menu` 
    FROM `user_menu` 
    JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id`
    WHERE `user_access_menu`.`role_id` = $role_id 
    ORDER BY `user_access_menu`.`menu_id` ASC";
$menu = $this->db->query($queryMenu)->result_array();  
?>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('pc/index'); ?>">
        <i class="fas fa-fw-light fa-tv text-success"></i>
        <span class="text-light">Home</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-user-tie text-success"></i>
        <span class="text-light">Agent</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-dark py-2 collapse-inner rounded">
            <a class="collapse-item text-light" href="<?= base_url('agen'); ?>">Add Agent</a>
            <a class="collapse-item text-light" href="<?= base_url('agen/list'); ?>">List Agent</a>
            <a class="collapse-item text-light" href="<?= base_url('agen/jaringan'); ?>">Network Generation</a>
            <a class="collapse-item text-light" href="<?= base_url('agen/pohon'); ?>">Tree Agent</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-dark py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Master Product</a>
            <a class="collapse-item" href="utilities-border.html">Category Product</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#komisi"
        aria-expanded="true" aria-controls="komisi">
        <i class="fas fa-fw fa-money-check text-success"></i>
        <span class="text-light text-success">Komisi</span>
    </a>
    <div id="komisi" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-dark py-2 collapse-inner rounded">
            <a class="collapse-item text-light" href="<?= base_url('komisi'); ?>">Komisi</a>
            <a class="collapse-item text-light" href="<?= base_url('komisi/statement'); ?>">Statment Komisi</a>
            <a class="collapse-item text-light" href="<?= base_url('komisi/wallet'); ?>">Wallet</a>
            <a class="collapse-item text-light" href="<?= base_url('komisi/withdraw'); ?>">Withdraw</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#flip"
        aria-expanded="true" aria-controls="flip">
        <i class="fas fa-fw fa-credit-card text-success"></i>
        <span class="text-light">Flip</span>
    </a>
    <div id="flip" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-dark py-2 collapse-inner rounded">
            <a class="collapse-item text-light" href="<?= base_url('flip'); ?>">Transaction</a>
            <a class="collapse-item text-light" href="<?= base_url('flip/inquery'); ?>">Inquery</a>
            <a class="collapse-item text-light" href="<?= base_url('flip/history'); ?>">History Payment</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan"
        aria-expanded="true" aria-controls="laporan">
        <i class="fas fa-fw fa-chart-bar text-success"></i>
        <span class="text-light">Laporan</span>
    </a>
    <div id="laporan" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-dark py-2 collapse-inner rounded">
            <a class="collapse-item text-light" href="<?= base_url('flip/regis'); ?>">Registration</a>
            <a class="collapse-item text-light" href="<?= base_url('flip/omset'); ?>">Total Omset</a>
            <a class="collapse-item text-light" href="<?= base_url('flip/personal'); ?>">Personal Omsite</a>
            <a class="collapse-item text-light" href="<?= base_url('flip/point_member'); ?>">Point Member</a>
            <a class="collapse-item text-light" href="<?= base_url('flip/reward'); ?>">Reward</a>
            <a class="collapse-item text-light" href="<?= base_url('flip/bonus'); ?>">Bonus Owner</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('staff'); ?>">
        <i class="fas fa-users text-success"></i>
        <span class="text-light">Staff</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#settings"
        aria-expanded="true" aria-controls="settings">
        <i class="fas fa-palette text-success"></i>
        <span class="text-light">Settings</span>
    </a>
    <div id="settings" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-dark py-2 collapse-inner rounded">
            <a class="collapse-item text-light" href="settings">Umum</a>
            <a class="collapse-item text-light" href="settings/notifikasi">Notifikasi</a>
            <a class="collapse-item text-light" href="settings/withdraw2">Withdraw</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
    <i class="fas fa-sign-out-alt fa-fw-fa-right-from-bracket text-success"></i>
    <span>Logout</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<style>
#sidebarToggle {
  width: 50px;
  height: 50px;
  background-color: #000;
  transition: background-color 0.3s;
}

#sidebarToggle.active {
  background-color: salmon;
  transition: background-color 0.3s;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  var sidebarToggle = $('#sidebarToggle');

  sidebarToggle.on('click', function() {
    sidebarToggle.toggleClass('active');
  });
});
</script>


</ul>
<!-- End of Sidebar -->