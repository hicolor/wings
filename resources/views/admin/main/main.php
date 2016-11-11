<?php include resource_path('views').'/admin/common/top.php'; ?>
<style>
    .rollbar-path-horizontal { height: 10px; background: rgba(255,255,255,0.2); }
    .rollbar-path-vertical { width: 3px; background: rgba(255,255,255,0.2); }
    .rollbar-path-vertical, .example .rollbar-path-horizontal {
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
    }
</style>

<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!--        $('body').rollbar({zIndex:100});-->
<!--    });-->
<!--</script>-->

<body class="page-container-bg-solid">


<!--头部导航-->
<?php include resource_path('views').'/admin/common/navbar.php'; ?>

<div class="clearfix"> </div>

    <iframe src="/admin/index" scrolling="no" frameborder="0" style="overflow-x:hidden; min-height:2500px;width: 100%;" name="mainframe" id="mainframe"></iframe>

<?php include resource_path('views').'/admin/common/slidebar.php'; ?>

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

<?php include resource_path('views').'/admin/common/bottom.php'; ?>
