<?php include resource_path('views').'/admin/common/top.php'; ?>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="fa fa-table"></i>
                    <span class="caption-subject bold uppercase"> <?php echo $category->name; ?> - 标签</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                            <input type="radio" name="status" class="toggle" id="option1" value="1">启用中</label>
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                            <input type="radio" name="status" class="toggle" id="option2" value="0">已禁用</label>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a class="btn green btn-outline sbold uppercase" id="demo_4" submiturl="/admin/articletag/add?cid=<?php echo $category->id; ?>"> Add New <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                    <tr>
                        <th width="10%"> 序号 </th>
                        <th width="20%"> 名称 </th>
                        <th width="10%"> 使用次数 </th>
                        <th width="10%"> 点击次数 </th>
                        <th width="25%"> 描述 </th>
                        <th width="25%"> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($taglist as $tag): ?>
                        <tr class="odd gradeX">
                            <td> <?php echo $tag->id; ?> </td>
                            <td>
                                <a href="javascript:;"> <?php echo $tag->name; ?> </a>
                            </td>
                            <td> <?php echo $tag->usenum; ?> </td>
                            <td>
                                <?php echo $tag->clicknum; ?>
                            </td>
                            <td> <?php echo $tag->desc; ?> </td>
                            <td>
                                <a href="/admin/articletag/edit?id=<?php echo $tag->id; ?>" class="btn btn-xs green" target="mainframe">
                                    <i class="fa fa-edit"></i> 编辑
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

<?php include resource_path('views').'/admin/common/bottom.php'; ?>
