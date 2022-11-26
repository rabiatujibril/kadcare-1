@extends('layouts.app')

@section('content')
    <div class="col-xl-12">
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
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

