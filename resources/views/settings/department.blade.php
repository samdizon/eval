@extends('layouts.app')

@section('content')
  {{-- Incorrect department validation --}}
  @if ($errors->has('department-name'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ $errors->first('department-name') }}</strong>.
    </div>
  @endif

  <div class="row">
    <h4 class="col-12">Departments</h4>
  </div>
  <div class="row">
    <div class="col-8 md-form mb-3">
      <input class="form-control" type="text" placeholder="Search" aria-label="Search">
    </div>
    <div class="col-2">
      <button type="button" class="btn btn-outline-info waves-effect">Search</button>
    </div>
    <div class="col-2">
      <button type="button" class="btn btn-outline-primary waves-effect" data-toggle="modal" data-target="#department-modal">Create</button>
    </div>
  </div>
  
  {{-- Create deparment modal start --}}
    <div class="modal fade" id="department-modal" tabindex="-1" role="dialog" aria-labelledby="department-modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        {!! Form::open(['action' => 'DepartmentController@store', 'method' => 'POST']) !!}
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <h4 class="modal-title" id="department-modal-label">Create new department</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body">
              <div class="md-form">
                {!! Form::label('department-name', 'Department name') !!}
                {!! Form::text('department-name','',['class'=>'form-control', 'required', 'id'=>'department-name']) !!}
              </div>
              <div class="custom-control custom-checkbox">
                    {!! Form::checkbox('department-active', '1', true, ['class'=>'custom-control-input', 'id'=>'department-active']) !!}
                    <label class="custom-control-label" for="department-active">Active</label>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
              {!! Form::submit('Save',['class'=>'btn btn-outline-info']) !!}
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  {{-- Create department modal end --}}
@endsection