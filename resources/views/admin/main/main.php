<?php include resource_path('views').'/admin/common/top.php'; ?>

<?php include resource_path('views').'/admin/common/navbar.php'; ?>
<!-- Main Container start -->
<div class="main-container">
    <?php include resource_path('views').'/admin/common/slidebar.php'; ?>
    <div class="dashboard-wrapper">
        <iframe src="/admin/index" width="100%" height="100%" scrolling="no" frameborder="0" style="overflow-x:hidden; height:100%;" name="mainframe" id="mainframe"></iframe>
    </div>
</div>
<!-- Main Container end -->

<?php include resource_path('views').'/admin/common/bottom.php'; ?>
