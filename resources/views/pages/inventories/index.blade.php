@extends('layouts.app')

@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title m-0">INVENTORY LIST</h6>
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
                        <th>Drug Code</th>
                        <th>Drug Name</th>
                        <th>QTY Available</th>
                        <th>Last Stock QTY</th>
                        <th>QTY Alert</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($inventories as $inventory)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $inventory->drug->code ?? null }}</td>
                            <td>{{ $inventory->drug->name ?? null }}</td>
                            <td>{{ $inventory->available_quantity ?? null }}</td>
                            <td>{{ $inventory->last_stock_quantity ?? null }}</td>
                            <td>{{ $inventory->quantity_alert ?? null }}</td>
                            <td class="project-actions">
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

