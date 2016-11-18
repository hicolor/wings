<?php include resource_path('views').'/admin/common/top.php'; ?>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="fa fa-table"></i>
                    <span class="caption-subject bold uppercase"> 分类列表</span>
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
                                <a href="/admin/articlecategory/add">
                                <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                    <i class="fa fa-plus"></i>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                    <tr>
                        <th width="5%"> 序号 </th>
                        <th width="10%"> 名称 </th>
                        <th width="10%"> 标识 </th>
                        <th width="50%"> 包含标签 </th>
                        <th width="10%"> 状态 </th>
                        <th width="15%"> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $category): ?>
                    <tr class="odd gradeX">
                        <td> <?php echo $category->id; ?> </td>
                        <td>
                            <a href="javascript:;"> <?php echo $category->name; ?> </a>
                        </td>
                        <td> <?php echo $category->mark; ?> </td>
                        <td>

                        </td>
                        <td class="center"> <?php echo $category->status; ?> </td>
                        <td>
                            <a href="/admin/taglist?cid=<?php echo $category->id; ?>" class="btn btn-xs green" target="mainframe">
                                <i class="fa fa-folder-open-o"></i> 查看标签
                            </a>
                            <a href="/admin/articlecategory/edit?id=<?php echo $category->id; ?>" class="btn btn-xs green" target="mainframe">
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

