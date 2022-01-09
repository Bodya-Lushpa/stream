@extends('layouts/admin_layout')

@section('title', 'Пользователи')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Пользователи</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        @if (session('success'))
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">{{ session('success') }}</h3>
            </div>
        </div>
        @endif

        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 15%">
                                id пользователя
                            </th>
                            <th style="width: 20%">
                                Имя пользователя
                            </th>
                            <th style="width: 40%">
                                Ссылки на каналы
                            </th>
                            <th style="width: 25%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($client as $client_item)
                        <tr>
                            <td>
                                {{ $client_item['id_client'] }}
                            </td>
                            <td>
                                {{ $client_item['name_client'] }}
                            </td>
                            <td>
                                {{ $client_item['link_channel'] }}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{ route('client.edit', $client_item['id']) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>

                                <form action="{{ route('client.destroy', $client_item['id']) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
                                    </a>
                                </form>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection