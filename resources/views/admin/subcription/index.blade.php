@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 ">
                    <div class="col-12 d-flex justify-content-between">
                        <h6>All Subcription Plan</h6>
                        <div class="text-end mx-3">
                            <a class="btn bg-gradient-primary px-3" href="#" type="button"><i class="fa fa-plus pe-2"></i>Tambah Plan</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    ID
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Package
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Limit
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Price
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Active
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <h6 class="text-sm">CreativeTim</h6>
                                </td>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                </td>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <p class="text-xs font-weight-bold mb-0">2</p>
                                </td>
                                <td class="align-middle text-center text-sm" style="width: 309px;">
                                    <span>4</span>
                                </td>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <span class="badge badge-sm bg-gradient-success">Active</span>
                                </td>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <a href="#"><span class="badge bg-gradient-info"><i class="fa fa-eye" aria-hidden="true"></i></i></span></a>
                                    <a href="#"><span class="badge bg-gradient-warning"><i class="fa fa-pause" aria-hidden="true"></i></span></a>
                                    <a href="#"><span class="badge bg-gradient-danger"><i class="fa fa-trash"></i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <h6 class="text-sm">CreativeTim</h6>
                                </td>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                </td>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <p class="text-xs font-weight-bold mb-0">2</p>
                                </td>
                                <td class="align-middle text-center text-sm" style="width: 309px;">
                                    <span>4</span>
                                </td>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <span class="badge badge-sm bg-gradient-success">Active</span>
                                </td>
                                <td class="align-middle text-center" style="width: 309px;">
                                    <a href="#"><span class="badge bg-gradient-info"><i class="fa fa-eye" aria-hidden="true"></i></i></span></a>
                                    <a href="#"><span class="badge bg-gradient-warning"><i class="fa fa-pause" aria-hidden="true"></i></span></a>
                                    <a href="#"><span class="badge bg-gradient-danger"><i class="fa fa-trash"></i></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
