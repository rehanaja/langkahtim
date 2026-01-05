@extends('layouts.app')

@section('content')
    <div class="row justify-content-between">
        <div class="col-4">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 24 24"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314"/></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search Users" aria-label="Search">
                </div>
            </div>
        </div>
        <div class="col-1 text-end mx-3">
            <a class="btn bg-gradient-success px-3" href="#" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 512 512"><path fill="#fff" d="M453.547 273.449H372.12v-40.714h81.427zm0 23.264H372.12v40.714h81.427zm0-191.934H372.12v40.713h81.427zm0 63.978H372.12v40.713h81.427zm0 191.934H372.12v40.714h81.427zm56.242 80.264c-2.326 12.098-16.867 12.388-26.58 12.796H302.326v52.345h-36.119L0 459.566V52.492L267.778 5.904h34.548v46.355h174.66c9.83.407 20.648-.291 29.197 5.583c5.991 8.608 5.41 19.543 5.817 29.43l-.233 302.791c-.29 16.925 1.57 34.2-1.978 50.892m-296.51-91.256c-16.052-32.57-32.395-64.909-48.39-97.48c15.82-31.698 31.408-63.512 46.937-95.327c-13.203.64-26.406 1.454-39.55 2.385c-9.83 23.904-21.288 47.169-28.965 71.888c-7.154-23.323-16.634-45.774-25.3-68.515c-12.796.698-25.592 1.454-38.387 2.21c13.493 29.78 27.86 59.15 40.946 89.104c-15.413 29.081-29.837 58.57-44.785 87.825c12.737.523 25.475 1.047 38.212 1.221c9.074-23.148 20.357-45.424 28.267-69.038c7.096 25.359 19.135 48.798 29.023 73.051c14.017.99 27.976 1.862 41.993 2.676M484.26 79.882H302.326v24.897h46.53v40.713h-46.53v23.265h46.53v40.713h-46.53v23.265h46.53v40.714h-46.53v23.264h46.53v40.714h-46.53v23.264h46.53v40.714h-46.53v26.897H484.26z"/></svg></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>All Users</h6>
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
                                    Name
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Email
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Organization
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Role
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
