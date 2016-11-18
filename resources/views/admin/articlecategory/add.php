<?php include resource_path('views').'/admin/common/top.php'; ?>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors->all() as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <span></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green sbold uppercase">新增分类</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <form action="/admin/articlecategory/add" class="form-horizontal" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <label class="col-md-3 control-label" for="form_control_1">名称</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="name" value="">
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input has-error">
                                <label class="col-md-3 control-label" for="form_control_1">标识</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="mark" value="">
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input has-warning">
                                <label class="col-md-3 control-label" for="form_control_1">图标</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="" name="icon" value="">
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input has-success">
                                <label class="col-md-3 control-label" for="form_control_1">所属</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="belongsto">
                                        <option value="life"> Life </option>
                                        <option value="learn"> Learn </option>
                                        <option value="like"> Like </option>
                                    </select>
                                    <div class="form-control-focus"> </div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group form-md-radios has-warning">
                                <label class="col-md-3 control-label" for="form_control_1">是否开启</label>
                                <div class="col-md-9">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="checkbox1_8" name="status" class="md-radiobtn" value="1">
                                            <label for="checkbox1_8">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> 启用 </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="checkbox1_9" name="status" class="md-radiobtn" checked="" value="0">
                                            <label for="checkbox1_9">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> 禁用 </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" class="btn green" value="提交">
                                    <a href="javascript:;" class="btn default">取消</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
            <div class="portlet-title">
                <a type="button" class="btn green mt-ladda-btn ladda-button btn-outline" data-style="slide-left" data-spinner-color="#333" href="/admin/articlecategory">
                    <span class="ladda-label">
                        <i class="icon-logout"></i> 返回分类</span>
                    <span class="ladda-spinner"></span></a>
            </div>
        </div>
    </div>

<?php include resource_path('views').'/admin/common/bottom.php'; ?>