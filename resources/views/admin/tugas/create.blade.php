@extends('layouts/app')

@section('content')
 <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header bg-primary">
                <a href="{{ route('tugas') }}" class="btn btn-success btn-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
        </div>
        <div class="card-body">
            <form action="{{ route('userStore') }}" method="post">
                @csrf

                <div class="row mb-2">
                <div class="col-12">
                    <label for="role" class="form-label w-100">
                        <span class="text-danger">*</span>
                        Nama :
                        <select name="user_id" id="user_id" class="form-control mt-1 @error('user_id')
                        is-invalid
                    @enderror">
                            <option selected disabled>--Pilih User---</option>
                            @foreach ($user as $item )
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    </label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-xl-12">
                    <label for="tugas" class="form-label">
                        <span class="text-danger">*</span>
                        Tugas :
                    </label>
                    <textarea name="tugas" id="tugas" rows="5" class="form-control"></textarea>
                    @error('tugas')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
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
