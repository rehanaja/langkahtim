@extends('layouts/app')

@section('content')
 <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mr-2">
                <a href="{{ route('tugasCreate') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Data
                </a>
            </div>
             <div>
                <a href="{{ route('userExcel') }}" class="btn btn-success btn-sm">
                    <i class="fas fa-file-excel mr-2"></i>
                    Excel
                </a>
                <a href="" class="btn btn-danger btn-sm">
                    <i class="fas fa-file-excel mr-2"></i>
                    PDF
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-primary text-white">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tugas</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>
                                                <i class="fas fa-cog"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tugas as $item )
                                            <tr class="text-center">
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->user->nama }}</td>
                                                <td>{{ $item->tugas }}</td>
                                                <td>{{ $item->tanggal_mulai }}</td>
                                                <td>{{ $item->tanggal_selesai }}</td>

                                                <td>
                                                    <a href="{{ route('userEdit', $item->id) }}" class="btn btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    <!-- Button trigger modal -->
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus{{ $item->id }}">
                                                <i class="fas fa-trash"></i>
                                                </button>
                                                    @include('admin.user.modal')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
        </div>
    </div>
@endsection
