<?php include resource_path('views').'/admin/common/top.php'; ?>
<style>
    .onoffswitch-inner:before, .onoffswitch-inner:after {
        height: 25px;
        line-height: 25px;
    }
</style>
<!-- Row start -->
<div class="row">
    <div class="col-md-4">
        <div class="widget">
            <a class="btn btn-default" href="/admin/article/add" style="color: #31b0d5;border-color: #269abc;">
                <span class="fs1" aria-hidden="true" data-icon="&#xe025;"></span>
                <span class="fs1" aria-hidden="true"> 创建</span>
            </a>
        </div>
    </div>
    <div class="col-md-8">
        <div class="widget">
            <select class="form-control" style="width: 20%;">
                <option value="">.input-sm</option>
            </select>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Data Table
                </div>
            </div>
            <div class="widget-body">
                <div id="dt_example" class="example_alt_pagination">
                    <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
                        <thead>
                        <tr>
                            <th style="width:5%">ID</th>
                            <th style="width:20%">标题</th>
                            <th style="width:10%">作者</th>
                            <th style="width:10%">分类</th>
                            <th style="width:15%">统计</th>
                            <th style="width:10%">创建时间</th>
                            <th style="width:10%">公开</th>
                            <th style="width:10%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td>1</td>
                            <td>Tacoma, WA(Washington)</td>
                            <td>aa</td>
                            <td>bb</td>
                            <td>1,2,3</td>
                            <td>1</td>
                            <td>
                                <div class="onoffswitch">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="a" checked>
                                    <label class="onoffswitch-label" for="a">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </label>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="actions-icons">
                                    <img src="/assets/admin/img/edit-icon.png" alt="edit" class="icons">
                                </a>
                                <a href="#" class="delete-row" data-original-title="Delete">
                                    <img src="/assets/admin/img/trash-icon.png" alt="trash">
                                </a>
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td>1</td>
                            <td>Tacoma, WA(Washington)</td>
                            <td>aa</td>
                            <td>bb</td>
                            <td>1,2,3</td>
                            <td>1</td>
                            <td>
                                <div class="onoffswitch">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="enableSocialPosts" checked>
                                    <label class="onoffswitch-label" for="enableSocialPosts">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </label>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="actions-icons">
                                    <img src="/assets/admin/img/edit-icon.png" alt="edit" class="icons">
                                </a>
                                <a href="#" class="delete-row" data-original-title="Delete">
                                    <img src="/assets/admin/img/trash-icon.png" alt="trash">
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
<?php include resource_path('views').'/admin/common/bottom.php'; ?>
