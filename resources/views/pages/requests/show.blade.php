
@extends('layouts.app')

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-1">
                        <div class="col-md-12">
                            <table class="table table-bordered mb-0">
                                <tbody>
                                <tr>
                                    <td  class="bg-primary text-light">
                                        <h4 class="mb-0">REQUEST #{{ $request->number }} ({{ $request->status }})</h4>
                                        <span>Date: {{ formatDate($request->created_at) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Requested By: </strong> {{ $request->user->fullname() ?? null }}<br>
                                        <strong>Facility: </strong>{{ $request->facility->name ?? null }} ({{ $request->facility->code ?? null }})<br>
                                        <strong>Ward: </strong>{{ $request->facility->ward->name ?? null }} ({{ $request->facility->ward->code ?? null }})<br>
                                        <strong>LGA: </strong>{{ $request->facility->ward->lga->name ?? null }} ({{ $request->facility->ward->lga->code ?? null }})<br>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <table class="table table-hover table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th style="width: 40px;">#</th>
                                    <th>Code</th>
                                    <th>Drug</th>
                                    <th>QTY Available</th>
                                    <th>QTY Requested</th>
                                    <th>QTY Approved</th>
                                    <th>Cost</th>
                                    <th>Sub Total</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($request->items as $item)
                                        <tr>
                                            <td style="width: 40px;">{{ $loop->iteration }}</td>
                                            <td>{{ $item->drug->code ?? null }}</td>
                                            <td>{{ $item->drug->name ?? null }}</td>
                                            <td>{{ $item->available_quantity ?? null }}</td>
                                            <td>{{ $item->requested_quantity ?? null }}</td>
                                            <td>{{ $item->approved_quantity ?? null }}</td>
                                            <td>{{ $item->unit_price ?? null }}</td>
                                            <td>{{ $item->unit_price * $item->approved_quantity }}</td>
                                            <td style="text-align:right">
                                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered mb-0">
                                <tbody>
                                <tr>
                                    <td class="text-end">
                                        <div class="fs-6 text-success">Total Earnings:- <strong style="width: 100px; display: inline-block;">$1,860</strong></div>
                                        <div class="fs-6 text-danger">Total Deductions:- <strong style="width: 100px; display: inline-block;">$288</strong></div>
                                        <div class="fs-5 mt-3">Net Salary:- <strong style="width: 100px; display: inline-block;">$1572.00</strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="fw-bold">Note:</h6>
                                        <span class="text-muted">Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,<br> weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
