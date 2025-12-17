@extends('layouts/app')

@section('content')
 <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header bg-warning">
                <a href="{{ route('tugas') }}" class="btn btn-success btn-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
        </div>
        <div class="card-body">
            <form action="{{ route('tugasUpdate', $tugas->id) }}" method="post">
                @csrf

                <div class="row mb-2">
                <div class="col-12">
                    <label for="role" class="form-label w-100">
                        <span class="text-danger">*</span>
                        Nama :
                       <input type="text" value="{{ $tugas->user->nama }}" class="form-control" disabled>
                    </label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-xl-12">
                    <label for="tugas" class="form-label">
                        <span class="text-danger">*</span>
                        Tugas :
                    </label>
                    <textarea name="tugas" id="tugas" rows="5" class="form-control @error('tugas')
                        is-invalid
                    @enderror">{{ $tugas->tugas }}</textarea>
                    @error('tugas')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="tanggal_mulai" class="form-label">
                        <span class="text-danger">*</span>
                        Tanggal Mulai :
                    </label>
                    <input type="date" name="tanggal_mulai" value="{{ $tugas->tanggal_mulai }}" class="form-control @error('tanggal_mulai')
                        is-invalid
                    @enderror">
                    @error('tanggal_mulai')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="col-xl-6">
                    <label for="tanggal_selesai" class="form-label">
                        <span class="text-danger">*</span>
                        Tanggal Selesai :
                    </label>
                    <input type="date" name="tanggal_selesai" value="{{ $tugas->tanggal_selesai }}" class="form-control @error('tanggal_selesai')
                        is-invalid
                    @enderror">
                    @error('tanggal_selesai')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit mr-2"></i>
                    Edit
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection
