<?php include resource_path('views').'/admin/common/top.php'; ?>

    <div id="epiceditor"></div>
    <script>
        var editor = new EpicEditor({basePath: '/assets/epiceditor'}).load();
    </script>

<?php include resource_path('views').'/admin/common/bottom.php'; ?>