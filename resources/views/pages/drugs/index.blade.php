@extends('layouts.app')

@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-secondary" type="button">Search</button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_modal" type="button">Add new</button>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#import_modal" type="button"><i class="fa fa-file-excel-o"></i> Import</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6 class="card-title m-0">DRUG LIST</h6>
                <div class="dropdown morphing scale-left">
                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                    <ul class="dropdown-menu shadow border-0 p-2">
                        <li><a class="dropdown-item" href="#">File Info</a></li>
                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                        <li><a class="dropdown-item" href="#">Move to</a></li>
                        <li><a class="dropdown-item" href="#">Rename</a></li>
                        <li><a class="dropdown-item" href="#">Block</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">

                <table class="table card-table table-hover mb-0 datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($drugs as $drug)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $drug->code }}</td>
                            <td>{{ $drug->name ?? null }}</td>
                            <td>{{ $drug->category->name ?? null }}</td>
                            <td>{{ $drug->type->name ?? null }}</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary delete" model-name="{{ class_basename($drug) }}" model-id="{{ $drug->id }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_modal" tabindex="-1" aria-labelledby="add_drug" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new drug</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="fw-bold">Basic Information</h6>
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="First Name">
                                <label>Enter First Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Last Name">
                                <label>Enter Last Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                                <label>Date of Birth </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Bank details">
                                <label>Bank details</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating">
                                <select class="form-select form-control">
                                    <option value="1">VIP</option>
                                    <option value="2">Vendors</option>
                                    <option value="2">Regular</option>
                                </select>
                                <label for="floatingSelect">Customer type</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating">
                                <select class="form-select form-control">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <label for="floatingSelect">Gender</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="formFile" class="form-label">Select Avatar</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-floating">
                                <textarea type="text" class="form-control" placeholder="Address" style="height: 100px" data-gramm="false" wt-ignore-input="true"></textarea>
                                <label>Address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="import_modal" tabindex="-1" aria-labelledby="add_drug" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="float-right"><a href="#">Template</a></div>
                            <label for="formFile" class="form-label">Select excel file</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Import</button>
                </div>
            </div>
        </div>
    </div>
@endsection

