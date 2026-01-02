@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 24 24"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314"/></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div>
    </div>

@endsection
