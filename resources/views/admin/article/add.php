<?php include resource_path('views').'/admin/common/top.php'; ?>

<div class="row page-title">
    <h2>
        <small>
            <li><a href="">&emsp;文章</a></li>
            <li>/</li>
            <li><a href="">编写文章</a></li>
        </small>
    </h2>

</div>

    <div id="epiceditor"></div>
    <script>
        var editor = new EpicEditor({basePath: '/assets/epiceditor'}).load();
    </script>

<?php include resource_path('views').'/admin/common/bottom.php'; ?>