<?php include resource_path('views').'/admin/common/top.php'; ?>

<body class="page-container-bg-solid">

<!--头部导航-->
<?php include resource_path('views').'/admin/common/navbar.php'; ?>

<?php include resource_path('views').'/admin/common/slidebar.php'; ?>

<div class="clearfix"> </div>

<!-- BEGIN CONTAINER -->
<div class="page-container page-content-inner page-container-bg-solid">
    <iframe src="/admin/index" scrolling="no" frameborder="0" style="overflow-x:hidden; width: 100%;" name="mainframe" id="mainframe"></iframe>
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="go2top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->

<!-- BEGIN QUICK SIDEBAR TOGGLER -->
<button type="button" class="quick-sidebar-toggler" data-toggle="collapse">
    <span class="sr-only">Toggle Quick Sidebar</span>
    <i class="icon-logout"></i>
    <div class="quick-sidebar-notification">
        <span class="badge badge-danger">7</span>
    </div>
</button>
<!-- END QUICK SIDEBAR TOGGLER -->

</body>

<script>
    $("#mainframe").load(function () {
        var mainheight = $(this).contents().find("body").height() + 30;
        $(this).height(mainheight);
    });
</script>

<?php include resource_path('views').'/admin/common/bottom.php'; ?>
