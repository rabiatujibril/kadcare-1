
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
                                    <th>QTY Available</th>
                                    <th>QTY Requested</th>
                                    <th>QTY Approved</th>
                                    <th>Cost</th>
                                    <th>Sub Total</th>
                                    <th>Action</th>
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
                                            <td>{{ $item->unit_price ?? null }}</td>
                                            <td>{{ $item->unit_price * $item->approved_quantity }}</td>
                                            <td style="text-align:right">
                                                <a href="javascript:;" qty="{{ $item->requested_quantity ?? 0 }}" class="btn btn-sm btn-outline-secondary update-quantity" data-bs-toggle="modal" data-bs-target="#update-quantity"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:;" price="{{ $item->unit_price ?? 0 }}" class="btn btn-sm btn-outline-secondary update-price" data-bs-toggle="modal" data-bs-target="#update-price"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-outline-danger delete"><i class="fa fa-trash"></i></a>
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
                                        <div class="fs-6 text-success">Total Cost: <strong style="width: 100px; display: inline-block;">{{ $totalCost ?? 0 }}</strong></div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="my-4 text-right">
                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#notification" class="btn btn-success">Approve</a>
                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#notification"  class="btn btn-info">Costed</a>
                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#notification"  class="btn btn-warning">Delivered</a>
                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#"  class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update-quantity" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Quantity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom_scroll">
                    <form class="my-3 mx-3" method="post" action="#">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Approved Quantity</label>
                                <input name="quantity" id="quantity-input" type="number" class="form-control" placeholder="Quantity">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><i class="fa fa-save me-2"></i>Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update-price" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Price</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom_scroll">
                    <form class="my-3 mx-3" method="post" action="#">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Unit Price</label>
                                <input name="price" id="price-input" type="number" class="form-control" placeholder="Unit Price">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><i class="fa fa-save me-2"></i>Update</button>
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
            $('.update-quantity').click(function(){
                let qty = $(this).attr('qty')
                $('#quantity-input').val(qty)
            })

            $('.update-price').click(function(){
                let price = $(this).attr('price')
                $('#price-input').val(price)
            })
        })
    </script>
@endpush
