@extends('dashboard.dashboard')

@section('title')
<h1>user</h1>
@endsection

@section('content')
{{-- {!! $dataTable->table() !!} --}}
<div class="card">
                <div class="card-header">
                <h3 class="card-title">{{$title}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open(array('route'=>'user.store','method'=>'post')) !!}
                            <div class="card-body">
                            <div class="form-group">
                                {!! Form::label('name', 'name') !!}
                                {!! Form::text('name', '',['class'=>'form-control','id'=>"exampleInputName1", 'placeholder'=>"Enter name"]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('username', 'username') !!}
                                {!! Form::text('username', '',['class'=>'form-control','id'=>"exampleInputUsername1", 'placeholder'=>"Enter username"]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'E-Mail Address') !!}
                                {!! Form::email('email', '',['class'=>'form-control','id'=>"exampleInputEmail1", 'placeholder'=>"Enter email"]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('phone', 'phone') !!}
                                {!! Form::text('phone', '',['class'=>'form-control','id'=>"exampleInputPhone1", 'placeholder'=>"Enter phone"]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('job', 'job') !!}
                                {!! Form::text('job', '',['class'=>'form-control','id'=>"exampleInputJob1", 'placeholder'=>"Enter job"]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('password', 'password') !!}
                                {!! Form::password('password',['class'=>'form-control','id'=>"exampleInputPassword1", 'placeholder'=>"Password "]) !!}

                            </div>
                          </div>
                          <!-- /.card-body -->
          
                          <div class="card-footer">
                            {!! Form::submit('add user',['class'=>'btn btn-primary']) !!}
                            {!! Form::close() !!}
                          </div>
                        </form>
                      </div>
                    
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap"> 
                </div>
                
                <!-- /.card-body -->
        
</div>

@endsection

