<?php include resource_path('views').'/admin/common/top.php'; ?>
<style>
    body {background: #2b2b2b;}
</style>

<?php include resource_path('views').'/admin/common/navbar.php'; ?>
<!-- Main Container start -->
<div class="main-container">
    <?php include resource_path('views').'/admin/common/slidebar.php'; ?>
    <div class="dashboard-wrapper">
        <iframe src="/admin/index" scrolling="no" frameborder="0" style="overflow-x:hidden; min-height:700px;;width: 100%;" name="mainframe" id="mainframe"></iframe>
    </div>
</div>
<!-- Main Container end -->

<?php include resource_path('views').'/admin/common/bottom.php'; ?>
