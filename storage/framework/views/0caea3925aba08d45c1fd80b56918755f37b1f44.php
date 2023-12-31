<?php echo e(Form::open(['url' => 'promotion', 'method' => 'post'])); ?>

<div class="modal-body">
    <div class="row">
        <div class="form-group col-lg-6 col-md-6">
            <?php echo e(Form::label('employee_id', __('Employee'), ['class' => 'col-form-label'])); ?>

            <?php echo e(Form::select('employee_id', $employees, null, ['class' => 'form-control select2', 'required' => 'required'])); ?>

        </div>
        <div class="form-group col-lg-6 col-md-6">
            <?php echo e(Form::label('designation_id', __('Designation'), ['class' => 'col-form-label'])); ?>

            <?php echo e(Form::select('designation_id', $designations, null, ['class' => 'form-control select2' , 'required' => 'required'])); ?>

        </div>
        <div class="form-group col-lg-6 col-md-6">
            <?php echo e(Form::label('promotion_title', __('Promotion Title'), ['class' => 'col-form-label'])); ?>

            <?php echo e(Form::text('promotion_title', null, ['class' => 'form-control','placeholder'=>'Enter Promotion Title' , 'required' => 'required'])); ?>

        </div>
        <div class="form-group col-lg-6 col-md-6">
            <?php echo e(Form::label('promotion_date', __('Promotion Date'), ['class' => 'col-form-label'])); ?>

            <?php echo e(Form::text('promotion_date', null, ['class' => 'form-control d_week','autocomplete'=>'off' , 'required' => 'required'])); ?>

        </div>
        <div class="form-group col-lg-12">
            <?php echo e(Form::label('description', __('Description'), ['class' => 'col-form-label'])); ?>

            <?php echo e(Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => __('Enter Description'),'rows'=>'3' , 'required' => 'required'])); ?>

        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="Cancel" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Create')); ?>" class="btn btn-primary">
</div>

<?php echo e(Form::close()); ?>

<?php /**PATH /home/xperthost/hr.xperthost.es/resources/views/promotion/create.blade.php ENDPATH**/ ?>