<?php $__env->startSection('page-title'); ?>
  <?php echo e(__('Edit Employee')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('employee')); ?>"><?php echo e(__('Employee')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Edit Employee')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="">
        <div class="">

            <?php echo e(Form::model($employee, ['route' => ['employee.update', $employee->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data'])); ?>

            <div class="row">
                <div class="col-md-6 ">
                    <div class="card " style="height: 1250px">
                        <div class="card-header">
                            <h5><?php echo e(__('Personal Detail')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <?php echo Form::label('name', __('Name'), ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                    <?php echo Form::text('name', old('name'), ['class' => 'form-control', 'required' => 'required' ,'placeholder'=>'Enter employee name']); ?>

                                </div>
                                <div class="form-group col-md-6">
                                    <?php echo Form::label('phone', __('Phone'), ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                    <?php echo Form::text('phone', old('phone'), ['class' => 'form-control' ,'placeholder'=>'Enter employee Phone']); ?>

                                </div>
                                <div class="form-group col-md-6">
                                    <?php echo Form::label('num_documento', 'Documento', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                    <?php echo Form::text('num_documento', old('num_documento'), ['class' => 'form-control' ,'placeholder'=>'Ingrese el documento Identificación']); ?>

                                </div>
                                <div class="form-group col-md-6">
                                    <?php echo Form::label('fecha_vencimiento_id', 'Fecha Vencimiento del ID', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                    <?php echo Form::input('date', 'fecha_vencimiento_id', old('fecha_vencimiento_id'), ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de vencimiento del ID']); ?>

                                </div>
                                <div class="form-group col-md-6">
                                    <?php echo Form::label('estado_civil', 'Estado Civil', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                    <?php echo Form::select('estado_civil', [
                                        'soltero' => 'Soltero',
                                        'casado' => 'Casado',
                                        'divorciado' => 'Divorciado',
                                        'viudo' => 'Viudo',
                                    ], old('estado_civil'), ['class' => 'form-control', 'placeholder' => 'Seleccione el estado civil']); ?>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('spouse_name', 'Nombre del Cónyuge', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::text('spouse_name', old('spouse_name'), ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del cónyuge'])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('children', 'Número de Hijos', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::number('children', old('children'), ['class' => 'form-control', 'placeholder' => 'Ingrese el número de hijos'])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('blood_type', 'Tipo de Sangre', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::select('blood_type', [
                                            'A+' => 'A+',
                                            'A-' => 'A-',
                                            'B+' => 'B+',
                                            'B-' => 'B-',
                                            'AB+' => 'AB+',
                                            'AB-' => 'AB-',
                                            'O+' => 'O+',
                                            'O-' => 'O-',
                                        ], old('blood_type'), ['class' => 'form-control', 'placeholder' => 'Seleccione el tipo de sangre'])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('health_conditions', 'Enfermedades o Alergias', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::textarea('health_conditions', old('health_conditions'), ['class' => 'form-control', 'placeholder' => 'Ingrese sus enfermedades o alergias', 'rows' => 4])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('nationality', 'Nacionalidad', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::select('nationality', [
                                            'usa' => 'Estados Unidos',
                                            'canada' => 'Canadá',
                                            'mexico' => 'México',
                                            'espana' => 'España',
                                            'otros' => 'Otros',
                                        ], old('nationality'), ['class' => 'form-control', 'placeholder' => 'Seleccione su nacionalidad'])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('driver_license', 'Licencia de Conducir', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::text('driver_license', old('driver_license'), ['class' => 'form-control', 'placeholder' => 'Ingrese su número de licencia de conducir'])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('driver_license_type', 'Tipo de Licencia de Conducir', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::select('driver_license_type', [
                                            'A' => 'Tipo A',
                                            'B' => 'Tipo B',
                                            'C' => 'Tipo C',
                                            'D' => 'Tipo D',
                                            'Otros' => 'Otros',
                                        ], old('driver_license_type'), ['class' => 'form-control', 'placeholder' => 'Seleccione el tipo de licencia de conducir'])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('has_vehicle', '¿Posee un Vehículo?', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <div>
                                            <label class="radio-inline">
                                                <?php echo Form::radio('has_vehicle', 'si', old('has_vehicle') === 'si' || $employee->has_vehicle === 'si', ['class' => 'form-check-input']); ?> Sí
                                            </label>
                                            <label class="radio-inline">
                                                <?php echo Form::radio('has_vehicle', 'no', old('has_vehicle') === 'no' || $employee->has_vehicle === 'no', ['class' => 'form-check-input']); ?> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('license_plate', 'Placa del Vehículo', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::text('license_plate', old('license_plate'), ['class' => 'form-control', 'placeholder' => 'Ingrese la placa del vehículo'])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('emergency_contact_name', 'Nombre del Contacto de Emergencia', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::text('emergency_contact_name', old('emergency_contact_name'), ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del contacto de emergencia'])); ?>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('emergency_contact_phone', 'Teléfono de Contacto de Emergencia', ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::text('emergency_contact_phone', old('emergency_contact_phone'), ['class' => 'form-control', 'placeholder' => 'Ingrese el número de teléfono del contacto de emergencia'])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo Form::label('dob', __('Date of Birth'), ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                        <?php echo e(Form::date('dob', null, ['class' => 'form-control ', 'required' => 'required', 'autocomplete' => 'off' ,'placeholder'=>'Select Date of Birth'])); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('gender', __('Gender'), ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                    <div class="d-flex radio-check">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="g_male" value="Male" name="gender" class="form-check-input" <?php echo e($employee->gender === 'Male' ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="g_male"><?php echo e(__('Male')); ?></label>
                                        </div>
                                        <div class="custom-control custom-radio ms-1 custom-control-inline">
                                            <input type="radio" id="g_female" value="Female" name="gender" class="form-check-input" <?php echo e($employee->gender === 'Female' ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="g_female"><?php echo e(__('Female')); ?></label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <?php echo Form::label('email', __('Email'), ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                    <?php echo Form::email('email', old('email'), ['class' => 'form-control', 'required' => 'required' ,'placeholder'=>'Enter employee Email']); ?>

                                </div>
                                <div class="form-group col-md-6">
                                    <?php echo Form::label('password', __('Password'), ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                    <?php echo Form::password('password', ['class' => 'form-control', 'required' => 'required' ,'placeholder'=>'Enter employee new Password']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('address', __('Address'), ['class' => 'form-label']); ?><span class="text-danger pl-1">*</span>
                                <?php echo Form::textarea('address', old('address'), ['class' => 'form-control', 'rows' => 2 ,'placeholder'=>'Enter employee Address']); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php if(\Auth::user()->type != 'employee'): ?>
                    <div class="col-md-6 ">
                        <div class="card " style="height: 1250px">
                            <div class="card-header">
                                <h5><?php echo e(__('Company Detail')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <?php echo Form::label('employee_id', __('Employee ID'), ['class' => 'form-label']); ?>

                                        <?php echo Form::text('employee_id', $employeesId, ['class' => 'form-control', 'disabled' => 'disabled']); ?>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo e(Form::label('branch_id', __('Branch'), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::select('branch_id', $branches, null, ['class' => 'form-control ', 'required' => 'required', 'placeholder' => 'Select Branch'])); ?>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo e(Form::label('department_id', __('Department'), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::select('department_id', $departments, null, ['class' => 'form-control ', 'id' => 'department_id', 'required' => 'required'])); ?>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo e(Form::label('designation_id', __('Designation'), ['class' => 'form-label'])); ?>

                                        


                                        <div class="form-icon-user">
                                            <div class="designation_div">
                                                <select class="form-control designation_id select2" name="designation_id"
                                                    id="choices-multiple" placeholder="Select Designation">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('company_doj', 'Company Date Of Joining', ['class' => 'form-label']); ?>

                                        <?php echo Form::date('company_doj', null, ['class' => 'form-control ', 'id' => 'data_picker2', 'required' => 'required']); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-md-6 ">
                        <div class="employee-detail-wrap ">
                            <div class="card " style="height: 506px">
                                <div class="card-header">
                                    <h5><?php echo e(__('Company Detail')); ?></h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong><?php echo e(__('Branch')); ?></strong>
                                                <span><?php echo e(!empty($employee->branch) ? $employee->branch->name : ''); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info font-style">
                                                <strong><?php echo e(__('Department')); ?></strong>
                                                <span><?php echo e(!empty($employee->department) ? $employee->department->name : ''); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info font-style">
                                                <strong><?php echo e(__('Designation')); ?></strong>
                                                <span><?php echo e(!empty($employee->designation) ? $employee->designation->name : ''); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong><?php echo e(__('Date Of Joining')); ?></strong>
                                                <span><?php echo e(\Auth::user()->dateFormat($employee->company_doj)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(\Auth::user()->type != 'employee'): ?>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="card " style="height: 506px">
                            <div class="card-header" >
                                <h5><?php echo e(__('Document')); ?></h5>
                            </div>
                            <div class="card-body">
                                <?php
                                    $employeedoc = $employee->documents()->pluck('document_value', __('document_id'));
                                ?>

                                <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row">
                                        <div class="form-group col-12 d-flex">
                                            <div class="float-left col-4">
                                                <label for="document" class=" form-label"><?php echo e($document->name); ?>

                                                    <?php if($document->is_required == 1): ?>
                                                        <span class="text-danger">*</span>
                                                    <?php endif; ?>
                                                </label>
                                            </div>
                                            <div class="float-right col-8">
                                                <input type="hidden" name="emp_doc_id[<?php echo e($document->id); ?>]" id=""
                                                    value="<?php echo e($document->id); ?>">

                                                <?php
                                                $employeedoc = !empty($employee->documents)?$employee->documents()->pluck('document_value',__('document_id')):[];
                                                $logo=\App\Models\Utility::get_file('uploads/document');

                                                ?>
                                                <div class="choose-files ">
                                                    <label for="document[<?php echo e($document->id); ?>]">
                                                        <div class=" bg-primary document "> <i
                                                                class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                                                        </div>
                                                        <input type="file"
                                                            class="form-control file  d-none <?php $__errorArgs = ['document'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            <?php if($document->is_required == 1): ?>  <?php endif; ?>
                                                            name="document[<?php echo e($document->id); ?>]" id="document[<?php echo e($document->id); ?>]"
                                                            data-filename="<?php echo e($document->id . '_filename'); ?>" onchange="document.getElementById('<?php echo e('blah'.$key); ?>').src = window.URL.createObjectURL(this.files[0])">
                                                    </label>
                                                    
                                                    <img id="<?php echo e('blah'.$key); ?>" src="<?php echo e((isset($employeedoc[$document->id]) && !empty($employeedoc[$document->id])?$logo.'/'.$employeedoc[$document->id]:'')); ?>"  width="50%" />

                                                </div>

                                                <?php if(!empty($employeedoc[$document->id])): ?>
                                                     <span class="text-xs"><a
                                                            href="<?php echo e(!empty($employeedoc[$document->id]) ? $logo . '/' . $employeedoc[$document->id] : ''); ?>"
                                                            target="_blank">
                                                            
                                                        </a>
                                                    </span>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card " style="height: 506px">
                            <div class="card-header">
                                <h5><?php echo e(__('Bank Account Detail')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('account_holder_name', __('Account Holder Name'), ['class' => 'form-label']); ?>

                                        <?php echo Form::text('account_holder_name', null, ['class' => 'form-control']); ?>


                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('account_number', __('Account Number'), ['class' => 'form-label']); ?>

                                        <?php echo Form::number('account_number', null, ['class' => 'form-control']); ?>


                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('bank_name', __('Bank Name'), ['class' => 'form-label']); ?>

                                        <?php echo Form::text('bank_name', null, ['class' => 'form-control']); ?>


                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('bank_identifier_code', __('Bank Identifier Code'), ['class' => 'form-label']); ?>

                                        <?php echo Form::text('bank_identifier_code', null, ['class' => 'form-control']); ?>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('branch_location', __('Branch Location'), ['class' => 'form-label']); ?>

                                        <?php echo Form::text('branch_location', null, ['class' => 'form-control']); ?>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('tax_payer_id', __('Tax Payer Id'), ['class' => 'form-label']); ?>

                                        <?php echo Form::text('tax_payer_id', null, ['class' => 'form-control']); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="employee-detail-wrap">
                            <div class="card " style="height: 506px">
                                <div class="card-header">
                                    <h5><?php echo e(__('Document Detail')); ?></h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php
                                            $employeedoc = $employee->documents()->pluck('document_value', __('document_id'));
                                        ?>
                                        <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-12">
                                                <div class="info">
                                                    <strong><?php echo e($document->name); ?></strong>
                                                    <span><a href="<?php echo e(!empty($employeedoc[$document->id]) ? asset(Storage::url('uploads/document')) . '/' . $employeedoc[$document->id] : ''); ?>"
                                                            target="_blank"><?php echo e(!empty($employeedoc[$document->id]) ? $employeedoc[$document->id] : ''); ?></a></span>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="employee-detail-wrap">
                            <div class="card " style="height: 506px">
                                <div class="card-header">
                                    <h5><?php echo e(__('Bank Account Detail')); ?></h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong><?php echo e(__('Account Holder Name')); ?></strong>
                                                <span><?php echo e($employee->account_holder_name); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info font-style">
                                                <strong><?php echo e(__('Account Number')); ?></strong>
                                                <span><?php echo e($employee->account_number); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info font-style">
                                                <strong><?php echo e(__('Bank Name')); ?></strong>
                                                <span><?php echo e($employee->bank_name); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong><?php echo e(__('Bank Identifier Code')); ?></strong>
                                                <span><?php echo e($employee->bank_identifier_code); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong><?php echo e(__('Branch Location')); ?></strong>
                                                <span><?php echo e($employee->branch_location); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong><?php echo e(__('Tax Payer Id')); ?></strong>
                                                <span><?php echo e($employee->tax_payer_id); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(\Auth::user()->type != 'employee'): ?>
                <div class="float-end">
                    <button type="submit" class="btn  btn-primary"><?php echo e('Update'); ?></button>
                </div>
            <?php endif; ?>
            <div class="col-12">
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-page'); ?>
    <script type="text/javascript">
        function getDesignation(did) {
            $.ajax({
                url: '<?php echo e(route('employee.json')); ?>',
                type: 'POST',
                data: {
                    "department_id": did,
                    "_token": "<?php echo e(csrf_token()); ?>",
                },
                success: function(data) {
                    $('.designation_id').empty();
                    var emp_selct = ` <select class="form-control  designation_id select2" name="designation_id" id="choices-multiple"
                                            placeholder="Select Designation" >
                                            </select>`;
                    $('.designation_div').html(emp_selct);
                    $('.designation_id').append('<option value="">Select any Designation</option>');
                    $.each(data, function(key, value) {
                        var select = '';
                        if (key == '<?php echo e($employee->designation_id); ?>') {
                            select = 'selected';
                        }

                        $('.designation_id').append('<option value="' + key + '"  ' + select + '>' +
                            value + '</option>');
                    });
                    new Choices('#choices-multiple', {
                        removeItemButton: true,
                    });
                }
            });
        }

        $(document).ready(function() {
            var d_id = $('#department_id').val();
            var designation_id = '<?php echo e($employee->designation_id); ?>';
            getDesignation(d_id);
        });

        $(document).on('change', 'select[name=department_id]', function() {
            var department_id = $(this).val();
            getDesignation(department_id);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CRISTIAN\Downloads\RRHH_CERTIFICACIONES\resources\views/employee/edit.blade.php ENDPATH**/ ?>