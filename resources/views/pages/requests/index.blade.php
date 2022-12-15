@extends('layouts.app')

@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-secondary" type="button">Search</button>
                    <a href="{{ route('admin.request.create') }}" class="btn btn-primary" >Create</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6 class="card-title m-0">REQUEST LIST</h6>
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
                        <th>Request No.</th>
                        <th>Facility</th>
                        <th>Ward</th>
                        <th>LGA</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $request)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $request->number }}</td>
                                <td>{{ $request->facility->code ?? null }}</td>
                                <td>{{ $request->facility->ward->name ?? null }}</td>
                                <td>{{ $request->facility->ward->lga->name ?? null }}</td>
                                <td>{{ formatDate($request->created_at) }}</td>
                                <td>
                                    {!!
                                        $request->status == 'Pending' ? '<span class="badge bg-warning">'.$request->status.'</span>':
                                        ($request->status == 'Approved' ? '<span class="badge bg-success">'.$request->status.'</span>': '')
                                     !!}
                                </td>
                                <td class="project-actions">
                                    <a href="{{ route('admin.request.show', $request->id) }}" class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-secondary delete" model-name="{{ class_basename($request) }}" model-id="{{ $request->id }}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

