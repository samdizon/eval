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

  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
      </button>
      <strong>{{ Session::get('success') }}</strong>.
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
  
  @if (count($departments)>0)
      <table id="dtDepartments" class="table table-striped" width="100%">
        <thead>
          <tr>
            <th>Active</th>
            <th>Name</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" @if($department->is_active == 1) {{'checked'}} @else  @endif name="chk-dept-active" disabled>
                      <label class="custom-control-label" for="chk-dept-active"></label>
                  </div>
                </td>
                <td>{{$department->name}}</td>
                <td align="center"><button class="btn btn-outline-warning waves-effect" data-toggle="modal" data-target="#department-modal-edit">Edit</button> </td>
              </tr>
            @endforeach
        </tbody>
      </table>
  @endif

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

  {{-- Edit deparment modal start --}}
  <div class="modal fade" id="department-modal-edit" tabindex="-1" role="dialog" aria-labelledby="department-modal-edit" aria-hidden="true">
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
  {{-- Edit department modal end --}}
@endsection