
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
                                    <td  class="bg-light-success text-primary">
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
                                    <th>Available</th>
                                    <th>Requested</th>
                                    <th>Approved</th>
                                    <th>Delivered</th>
                                    <th>Cost</th>
                                    <th>Sub Total</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php $totalPrice = 0; @endphp
                                    @foreach($request->items as $item)
                                        <tr>
                                            <td style="width: 40px;">{{ $loop->iteration }}</td>
                                            <td>{{ $item->drug->code ?? null }}</td>
                                            <td style="width:20%" class="cut-text" title="{{ $item->drug->name ?? null }}">{{ $item->drug->name ?? null }}</td>
                                            <td>{{ $item->available_quantity ?? null }}</td>
                                            <td>{{ $item->requested_quantity ?? null }}</td>
                                            <td>{{ $item->approved_quantity ?? null }}</td>
                                            <td>{{ $item->delivered_quantity ?? null }}</td>
                                            <td>{{ $item->unit_price ?? null }}</td>
                                            <td>{{ $item->unit_price * $item->approved_quantity }}</td>
                                            <td>{{ $item->status }}</td>
                                        </tr>
                                        @php $totalPrice += ($item->unit_price * $item->approved_quantity); @endphp
                                    @endforeach
                                    <tr>
                                        <td colspan="8" class="text-end">
                                            <div class="fs-6 text-success">Total Cost: </div>
                                        </td>
                                        <td> <strong style="width: 100px; display: inline-block;">{{ $totalPrice }}</strong></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <div class="my-4 text-right">
                                <form class="mb-4">
                                    <div class="form-group">
                                        <input type="file" name="invoice" class="form-control" />
                                    </div>
                                </form>
                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#approve-request" class="btn btn-success"><i class="fa fa-check-circle me-2"></i> Approve</a>
                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#deliver-request"  class="btn btn-warning"><i class="fa fa-check-circle me-2"></i> Receive</a>
                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#"  class="btn btn-danger"><i class="fa fa-times me-2"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="approve-request" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body custom_scroll p-lg-5">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Approve Request</h4>
                    <div class="row g-2 mt-3">
                        <form class="approve-request-form" action="{{ route('admin.request.approve') }}" method="POST">
                            @csrf
                            <table class="table table-hover mb-4">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Requested</th>
                                    <th>Approved</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($request->items as $item)
                                        <input name="item_id[]" type="hidden" value="{{ $item->id  }}" />
                                        <tr>
                                            <td class="pt-3">{{ $loop->iteration }}</td>
                                            <td class="pt-3">{{ $item->drug->code ?? null }}</td>
                                            <td class="pt-3 text-nowrap">{{ $item->drug->name ?? null }}</td>
                                            <td class="pt-3">{{ $item->requested_quantity }}</td>
                                            <td>
                                                <input min="0" max="{{ $item->requested_quantity }}" name="approved_quantity[]" type="number" class="form-control" value="{{ $item->approved_quantity }}" />
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="inline-block">
                                <div class="form-check form-check-inline">
                                    <input name="sms" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label" for="flexCheckChecked">Send SMS Notification</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="email"  class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label" for="flexCheckChecked">Send eMail Notification</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="push"  class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label" for="flexCheckChecked">Send Push Notification</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary approve-request-btn"><i class="fa fa-check-circle me-2"></i>Approve</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cost-request" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body custom_scroll p-lg-5">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Cost Request</h4>
                    <div class="row g-2 mt-3">
                        <form class="cost-request-form" action="{{ route('admin.request.cost') }}" method="POST">
                            @csrf
                            <table class="table table-hover mb-4">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Approved</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($request->items as $item)
                                    <input name="item_id[]" type="hidden" value="{{ $item->id  }}" />
                                    <tr>
                                        <td class="pt-3">{{ $loop->iteration }}</td>
                                        <td class="pt-3">{{ $item->drug->code ?? null }}</td>
                                        <td class="pt-3 text-nowrap">{{ $item->drug->name ?? null }}</td>
                                        <td class="pt-3">{{ $item->approved_quantity }}</td>
                                        <td>
                                            <input name="unit_price[]" type="number" class="form-control" value="{{ $item->unit_price }}" />
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="inline-block">
                                <div class="form-check form-check-inline">
                                    <input name="sms" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label" for="flexCheckChecked">Send SMS Notification</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="email"  class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label" for="flexCheckChecked">Send eMail Notification</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="push"  class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label" for="flexCheckChecked">Send Push Notification</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary cost-request-btn"><i class="fa fa-check-circle me-2"></i>Costed</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deliver-request" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body custom_scroll p-lg-5">
                    <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title">Received Request</h4>
                    <div class="row g-2 mt-3">
                        <form class="deliver-request-form" action="{{ route('admin.request.receive') }}" method="POST">
                            @csrf
                            <table class="table table-hover mb-4">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Approved</th>
                                    <th>Received</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($request->items as $item)
                                    <input name="item_id[]" type="hidden" value="{{ $item->id  }}" />
                                    <tr>
                                        <td class="pt-3">{{ $loop->iteration }}</td>
                                        <td class="pt-3">{{ $item->drug->code ?? null }}</td>
                                        <td class="pt-3 text-nowrap">{{ $item->drug->name ?? null }}</td>
                                        <td class="pt-3">{{ $item->approved_quantity }}</td>
                                        <td>
                                            <input name="delivered_quantity[]"  type="number" class="form-control" value="{{ $item->delivered_quantity }}" />
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="inline-block">
                                <div class="form-check form-check-inline">
                                    <input name="sms" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label" for="flexCheckChecked">Send SMS Notification</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="email"  class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label" for="flexCheckChecked">Send eMail Notification</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="push"  class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label" for="flexCheckChecked">Send Push Notification</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary deliver-request-btn"><i class="fa fa-check-circle me-2"></i>Received</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="notification" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you sure?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom_scroll">
                    <form class="my-3 mx-3" method="post" action="#">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                            <label class="form-check-label" for="flexCheckChecked">Send SMS Notification</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                            <label class="form-check-label" for="flexCheckChecked">Send eMail Notification</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                            <label class="form-check-label" for="flexCheckChecked">Send Push Notification</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-check me-2"></i>Yes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function(){
            $('.approve-request-btn').click(function(){
                $('.approve-request-form').submit();
            })

            $('.cost-request-btn').click(function(){
                $('.cost-request-form').submit()
            })

            $('.deliver-request-btn').click(function(){
                $('.deliver-request-form').submit()
            })
        })
    </script>
@endpush
