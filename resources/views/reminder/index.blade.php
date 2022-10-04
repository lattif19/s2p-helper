
@extends('layout.main')
@include('reminder.sidebar.menu')

@section('container')
<style>
    a{
        text-decoration: none;
    }
</style>


<div class="container-fluid px-4">
    <div class="row">
        <h1 class="mt-4">{{ $title }}</h1>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">PT Sumber Segara Primadaya</li>
    </ol>

    <div class="conten">
        <div class="card">
            <div class="card-header">
                <h5>List Schedule</h5>
            </div>
            <div class="card-body table-respon">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr align="center">
                            <td width="10px">No</td>
                            <td width="200px">Nama Catatan</td>
                            <td width="150px">Expired Date</td>
                            <td width="150px">Date Reminder</td>
                            <td width="100px">Divisi</td>
                            <td width="50px">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reminder_data as $r)
                            <tr align="center">
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $r->nama }}</td>
                                <td>{{ $r->tanggal_expired }}</td>
                                <td>{{ $r->tanggal_pengingat }}</td>
                                <td>{{ $r->pegawai_divisi->nama }}</td>
                                <td width="50px">
                                    <a href="#" class="btn btn-info btn-xs">
                                        <i class="fa fa-info" aria-hidden="true" data-toogle="tooltip" data-placement="top" title="Detail"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
@endif
@if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
@endif
@endsection

