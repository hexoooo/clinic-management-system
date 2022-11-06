@extends('dashboard.dashboard')

@section('title')
<h1>user</h1>
@endsection

@section('content')
{{-- {!! $dataTable->table() !!} --}}
<div class="card">
              <div class="card-header">
                <h3 class="card-title">{{!empty($title)?$title:'add new user'}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                {!! $dataTable->table() !!}
                {!! $dataTable->scripts() !!}
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap"> 
              </div>
              
              <!-- /.card-body -->
              {!! Form::open(array('route'=>'user.create','method'=>'get')) !!}
              {!! Form::submit('add user') !!}
              {!! Form::close() !!}
</div>

@endsection

