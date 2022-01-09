@extends('layouts/admin_layout')

@section('title', 'Редактирование пользователей')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование пользователей</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <!-- general form elements -->
                    <div class="card card-primary">

                            @if (session('success'))
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ session('success') }}</h3>
                                    </div>
                                </div>
                            @endif 
                        
                        <form action="{{ route('client.update', $client['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ссылки на каналы</label>
                                <input type="text" value="{{ $client['link_channel'] }}" class="form-control" name="link_channel" id="exampleInputEmail1" placeholder="Ссылки на каналы">
                            </div>
                           
                            
                            <button type="submit" class="btn btn-primary">Обновить</button>

                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

    @endsection