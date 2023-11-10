@extends('layouts.admin')

@section('page-title')
  {{ __('Edit Employee') }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
    <li class="breadcrumb-item"><a href="{{ url('employee') }}">{{ __('Employee') }}</a></li>
    <li class="breadcrumb-item">{{ __('Edit Employee') }}</li>
@endsection

@section('content')

    <div class="">
        <div class="">

            {{ Form::model($employee, ['route' => ['employee.update', $employee->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
            <div class="row">
                <div class="col-md-6 ">
                    <div class="card " style="height: 1250px">
                        <div class="card-header">
                            <h5>{{ __('Personal Detail') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {!! Form::label('name', __('Name'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'required' => 'required' ,'placeholder'=>'Enter employee name']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('phone', __('Phone'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                    {!! Form::text('phone', old('phone'), ['class' => 'form-control' ,'placeholder'=>'Enter employee Phone']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('num_documento', 'Documento', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                    {!! Form::text('num_documento', old('num_documento'), ['class' => 'form-control' ,'placeholder'=>'Ingrese el documento Identificación']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('fecha_vencimiento_id', 'Fecha Vencimiento del ID', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                    {!! Form::input('date', 'fecha_vencimiento_id', old('fecha_vencimiento_id'), ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de vencimiento del ID']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('estado_civil', 'Estado Civil', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                    {!! Form::select('estado_civil', [
                                        'soltero' => 'Soltero',
                                        'casado' => 'Casado',
                                        'divorciado' => 'Divorciado',
                                        'viudo' => 'Viudo',
                                    ], old('estado_civil'), ['class' => 'form-control', 'placeholder' => 'Seleccione el estado civil']) !!}
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('spouse_name', 'Nombre del Cónyuge', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::text('spouse_name', old('spouse_name'), ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del cónyuge']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('children', 'Número de Hijos', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::number('children', old('children'), ['class' => 'form-control', 'placeholder' => 'Ingrese el número de hijos']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('blood_type', 'Tipo de Sangre', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::select('blood_type', [
                                            'A+' => 'A+',
                                            'A-' => 'A-',
                                            'B+' => 'B+',
                                            'B-' => 'B-',
                                            'AB+' => 'AB+',
                                            'AB-' => 'AB-',
                                            'O+' => 'O+',
                                            'O-' => 'O-',
                                        ], old('blood_type'), ['class' => 'form-control', 'placeholder' => 'Seleccione el tipo de sangre']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('health_conditions', 'Enfermedades o Alergias', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::textarea('health_conditions', old('health_conditions'), ['class' => 'form-control', 'placeholder' => 'Ingrese sus enfermedades o alergias', 'rows' => 4]) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('nationality', 'Nacionalidad', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::select('nationality', [
                                            'usa' => 'Estados Unidos',
                                            'canada' => 'Canadá',
                                            'mexico' => 'México',
                                            'espana' => 'España',
                                            'otros' => 'Otros',
                                        ], old('nationality'), ['class' => 'form-control', 'placeholder' => 'Seleccione su nacionalidad']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('driver_license', 'Licencia de Conducir', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::text('driver_license', old('driver_license'), ['class' => 'form-control', 'placeholder' => 'Ingrese su número de licencia de conducir']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('driver_license_type', 'Tipo de Licencia de Conducir', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::select('driver_license_type', [
                                            'A' => 'Tipo A',
                                            'B' => 'Tipo B',
                                            'C' => 'Tipo C',
                                            'D' => 'Tipo D',
                                            'Otros' => 'Otros',
                                        ], old('driver_license_type'), ['class' => 'form-control', 'placeholder' => 'Seleccione el tipo de licencia de conducir']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('has_vehicle', '¿Posee un Vehículo?', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        <div>
                                            <label class="radio-inline">
                                                {!! Form::radio('has_vehicle', 'si', old('has_vehicle') === 'si' || $employee->has_vehicle === 'si', ['class' => 'form-check-input']) !!} Sí
                                            </label>
                                            <label class="radio-inline">
                                                {!! Form::radio('has_vehicle', 'no', old('has_vehicle') === 'no' || $employee->has_vehicle === 'no', ['class' => 'form-check-input']) !!} No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('license_plate', 'Placa del Vehículo', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::text('license_plate', old('license_plate'), ['class' => 'form-control', 'placeholder' => 'Ingrese la placa del vehículo']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('emergency_contact_name', 'Nombre del Contacto de Emergencia', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::text('emergency_contact_name', old('emergency_contact_name'), ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del contacto de emergencia']) }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('emergency_contact_phone', 'Teléfono de Contacto de Emergencia', ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::text('emergency_contact_phone', old('emergency_contact_phone'), ['class' => 'form-control', 'placeholder' => 'Ingrese el número de teléfono del contacto de emergencia']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('dob', __('Date of Birth'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                        {{ Form::date('dob', null, ['class' => 'form-control ', 'required' => 'required', 'autocomplete' => 'off' ,'placeholder'=>'Select Date of Birth']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('gender', __('Gender'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                    <div class="d-flex radio-check">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="g_male" value="Male" name="gender" class="form-check-input" {{ $employee->gender === 'Male' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="g_male">{{ __('Male') }}</label>
                                        </div>
                                        <div class="custom-control custom-radio ms-1 custom-control-inline">
                                            <input type="radio" id="g_female" value="Female" name="gender" class="form-check-input" {{ $employee->gender === 'Female' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="g_female">{{ __('Female') }}</label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('email', __('Email'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'required' => 'required' ,'placeholder'=>'Enter employee Email']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('password', __('Password'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required' ,'placeholder'=>'Enter employee new Password']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', __('Address'), ['class' => 'form-label']) !!}<span class="text-danger pl-1">*</span>
                                {!! Form::textarea('address', old('address'), ['class' => 'form-control', 'rows' => 2 ,'placeholder'=>'Enter employee Address']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                @if (\Auth::user()->type != 'employee')
                    <div class="col-md-6 ">
                        <div class="card " style="height: 1250px">
                            <div class="card-header">
                                <h5>{{ __('Company Detail') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @csrf
                                    <div class="form-group">
                                        {!! Form::label('employee_id', __('Employee ID'), ['class' => 'form-label']) !!}
                                        {!! Form::text('employee_id', $employeesId, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('branch_id', __('Branch'), ['class' => 'form-label']) }}
                                        {{ Form::select('branch_id', $branches, null, ['class' => 'form-control ', 'required' => 'required', 'placeholder' => 'Select Branch']) }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('department_id', __('Department'), ['class' => 'form-label']) }}
                                        {{ Form::select('department_id', $departments, null, ['class' => 'form-control ', 'id' => 'department_id', 'required' => 'required']) }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{ Form::label('designation_id', __('Designation'), ['class' => 'form-label']) }}
                                        {{-- <select class=" form-control select2-multiple" id="designation_id"
                                            name="designation_id" data-toggle=""
                                            data-placeholder="{{ __('Select Designation ...') }}">
                                            <option value="">{{ __('Select any Designation') }}</option>
                                        </select> --}}


                                        <div class="form-icon-user">
                                            <div class="designation_div">
                                                <select class="form-control designation_id select2" name="designation_id"
                                                    id="choices-multiple" placeholder="Select Designation">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('company_doj', 'Company Date Of Joining', ['class' => 'form-label']) !!}
                                        {!! Form::date('company_doj', null, ['class' => 'form-control ', 'id' => 'data_picker2', 'required' => 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-6 ">
                        <div class="employee-detail-wrap ">
                            <div class="card " style="height: 506px">
                                <div class="card-header">
                                    <h5>{{ __('Company Detail') }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong>{{ __('Branch') }}</strong>
                                                <span>{{ !empty($employee->branch) ? $employee->branch->name : '' }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info font-style">
                                                <strong>{{ __('Department') }}</strong>
                                                <span>{{ !empty($employee->department) ? $employee->department->name : '' }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info font-style">
                                                <strong>{{ __('Designation') }}</strong>
                                                <span>{{ !empty($employee->designation) ? $employee->designation->name : '' }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong>{{ __('Date Of Joining') }}</strong>
                                                <span>{{ \Auth::user()->dateFormat($employee->company_doj) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            @if (\Auth::user()->type != 'employee')
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="card " style="height: 506px">
                            <div class="card-header" >
                                <h5>{{ __('Document') }}</h5>
                            </div>
                            <div class="card-body">
                                @php
                                    $employeedoc = $employee->documents()->pluck('document_value', __('document_id'));
                                @endphp

                                @foreach ($documents as $key => $document)
                                    <div class="row">
                                        <div class="form-group col-12 d-flex">
                                            <div class="float-left col-4">
                                                <label for="document" class=" form-label">{{ $document->name }}
                                                    @if ($document->is_required == 1)
                                                        <span class="text-danger">*</span>
                                                    @endif
                                                </label>
                                            </div>
                                            <div class="float-right col-8">
                                                <input type="hidden" name="emp_doc_id[{{ $document->id }}]" id=""
                                                    value="{{ $document->id }}">

                                                @php
                                                $employeedoc = !empty($employee->documents)?$employee->documents()->pluck('document_value',__('document_id')):[];
                                                $logo=\App\Models\Utility::get_file('uploads/document');

                                                @endphp
                                                <div class="choose-files ">
                                                    <label for="document[{{ $document->id }}]">
                                                        <div class=" bg-primary document "> <i
                                                                class="ti ti-upload px-1"></i>{{ __('Choose file here') }}
                                                        </div>
                                                        <input type="file"
                                                            class="form-control file  d-none @error('document') is-invalid @enderror"
                                                            @if ($document->is_required == 1)  @endif
                                                            name="document[{{ $document->id }}]" id="document[{{ $document->id }}]"
                                                            data-filename="{{ $document->id . '_filename' }}" onchange="document.getElementById('{{'blah'.$key}}').src = window.URL.createObjectURL(this.files[0])">
                                                    </label>
                                                    {{-- <a href="#"><p class="{{ $document->id . '_filename' }} "></p></a> --}}
                                                    <img id="{{'blah'.$key}}" src="{{ (isset($employeedoc[$document->id]) && !empty($employeedoc[$document->id])?$logo.'/'.$employeedoc[$document->id]:'') }}"  width="50%" />

                                                </div>

                                                @if (!empty($employeedoc[$document->id]))
                                                     <span class="text-xs"><a
                                                            href="{{ !empty($employeedoc[$document->id]) ? $logo . '/' . $employeedoc[$document->id] : '' }}"
                                                            target="_blank">
                                                            {{-- {{ !empty($employeedoc[$document->id]) ? $employeedoc[$document->id] : '' }} --}}
                                                        </a>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card " style="height: 506px">
                            <div class="card-header">
                                <h5>{{ __('Bank Account Detail') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('account_holder_name', __('Account Holder Name'), ['class' => 'form-label']) !!}
                                        {!! Form::text('account_holder_name', null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('account_number', __('Account Number'), ['class' => 'form-label']) !!}
                                        {!! Form::number('account_number', null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('bank_name', __('Bank Name'), ['class' => 'form-label']) !!}
                                        {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}

                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('bank_identifier_code', __('Bank Identifier Code'), ['class' => 'form-label']) !!}
                                        {!! Form::text('bank_identifier_code', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('branch_location', __('Branch Location'), ['class' => 'form-label']) !!}
                                        {!! Form::text('branch_location', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('tax_payer_id', __('Tax Payer Id'), ['class' => 'form-label']) !!}
                                        {!! Form::text('tax_payer_id', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="employee-detail-wrap">
                            <div class="card " style="height: 506px">
                                <div class="card-header">
                                    <h5>{{ __('Document Detail') }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @php
                                            $employeedoc = $employee->documents()->pluck('document_value', __('document_id'));
                                        @endphp
                                        @foreach ($documents as $key => $document)
                                            <div class="col-md-12">
                                                <div class="info">
                                                    <strong>{{ $document->name }}</strong>
                                                    <span><a href="{{ !empty($employeedoc[$document->id]) ? asset(Storage::url('uploads/document')) . '/' . $employeedoc[$document->id] : '' }}"
                                                            target="_blank">{{ !empty($employeedoc[$document->id]) ? $employeedoc[$document->id] : '' }}</a></span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="employee-detail-wrap">
                            <div class="card " style="height: 506px">
                                <div class="card-header">
                                    <h5>{{ __('Bank Account Detail') }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong>{{ __('Account Holder Name') }}</strong>
                                                <span>{{ $employee->account_holder_name }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info font-style">
                                                <strong>{{ __('Account Number') }}</strong>
                                                <span>{{ $employee->account_number }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info font-style">
                                                <strong>{{ __('Bank Name') }}</strong>
                                                <span>{{ $employee->bank_name }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong>{{ __('Bank Identifier Code') }}</strong>
                                                <span>{{ $employee->bank_identifier_code }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong>{{ __('Branch Location') }}</strong>
                                                <span>{{ $employee->branch_location }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info">
                                                <strong>{{ __('Tax Payer Id') }}</strong>
                                                <span>{{ $employee->tax_payer_id }}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (\Auth::user()->type != 'employee')
                <div class="float-end">
                    <button type="submit" class="btn  btn-primary">{{ 'Update' }}</button>
                </div>
            @endif
            <div class="col-12">
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@push('script-page')
    <script type="text/javascript">
        function getDesignation(did) {
            $.ajax({
                url: '{{ route('employee.json') }}',
                type: 'POST',
                data: {
                    "department_id": did,
                    "_token": "{{ csrf_token() }}",
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
                        if (key == '{{ $employee->designation_id }}') {
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
            var designation_id = '{{ $employee->designation_id }}';
            getDesignation(d_id);
        });

        $(document).on('change', 'select[name=department_id]', function() {
            var department_id = $(this).val();
            getDesignation(department_id);
        });
    </script>
@endpush
