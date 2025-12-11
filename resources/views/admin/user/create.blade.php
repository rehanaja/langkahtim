@extends('layouts/app')

@section('content')
 <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header bg-primary">
                <a href="{{ route('user') }}" class="btn btn-success btn-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
        </div>
        <div class="card-body">
            <form action="{{ route('userStore') }}" method="post">
                @csrf
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="nama" class="form-label">
                        <span class="text-danger">*</span>
                        Nama :
                    </label>
                    <input type="text" id="nama" name="nama" class="form-control @error('nama')
                        is-invalid
                    @enderror" value="{{ old('nama') }}">
                    @error('nama')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="col-xl-6">
                    <label for="email" class="form-label">
                        <span class="text-danger">*</span>
                        Email :
                    </label>
                    <input type="email" id="email" name="email" class="form-control @error('email')
                        is-invalid
                    @enderror" value="{{ old('email') }}">
                    @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <label for="role" class="form-label w-100">
                        <span class="text-danger">*</span>
                        Role :
                        <select name="role" id="role" class="form-control mt-1 @error('role')
                        is-invalid
                    @enderror">
                            <option selected disabled>--Pilih Role---</option>
                            <option value="Ketua">Ketua</option>
                            <option value="Anggota">Anggota</option>
                        </select>
                        @error('role')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    </label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="password" class="form-label">
                        <span class="text-danger">*</span>
                        Password :
                    </label>
                    <input type="password" id="password" name="password" class="form-control @error('password')
                        is-invalid
                    @enderror">
                    @error('password')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="col-xl-6">
                    <label for="password_konfirmasi" class="form-label">
                        <span class="text-danger">*</span>
                        Password Konfirmasi :
                    </label>
                    <input type="password" id="password_konfirmasi" name="password_confirmation" class="form-control @error('password')
                        is-invalid
                    @enderror">
                </div>
            </div>
            
            <div class="mt-3">
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fas fa-save mr-2"></i>
                    Simpan
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection