@extends('layouts.app')

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card print_invoice">
                <div class="card-header fs-4">
                    <h5 class="card-title mb-0">CREATE NEW REQUEST</h5>
                </div>
                <div class="card-body">
                    <div class="card">
                        <table class="table mb-0">
                            <tbody>
                            <tr>
                                <td  class="bg-primary text-light">
                                    <h4 class="mb-0">REQUEST # -- </h4>
                                    <span>Date: {{ formatDate(now()) }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>User: </strong> {{ auth()->user()->fullname() ?? null }}<br>
                                    <strong>Facility: </strong>{{ session('facility')->name ?? null }} ({{ session('facility')->code ?? null }})<br>
                                    <strong>Ward: </strong>{{ session('facility')->ward->name ?? null }} ({{ session('facility')->ward->code ?? null }})<br>
                                    <strong>LGA: </strong>{{ session('facility')->ward->lga->name ?? null }} ({{ session('facility')->ward->lga->code ?? null }})<br>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="items">
                            <tbody>
                            <tr>
                                <th>Drug/Facility</th>
                                <th>Description</th>
                                <th style="width: 140px;">Available</th>
                                <th style="width: 70px;">QTY</th>
                            </tr>
                            <tr class="item-row">
                                <td class="item-name">
                                    <div class="delete-wpr"><textarea>Drug Code</textarea>
                                        <a class="delete" href="javascript:;" title="Remove row">X</a>
                                    </div>
                                </td>
                                <td class="description">
                                    <textarea>Description</textarea>
                                </td>
                                <td><textarea class="cost">0</textarea></td>
                                <td><textarea class="qty">0</textarea></td>
                            </tr>
                            <tr id="hiderow">
                                <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
                            </tr>
                            {{--<tr>
                                <td colspan="2" class="blank"> </td>
                                <td colspan="2" class="total-line">Subtotal</td>
                                <td class="total-value">
                                    <div id="subtotal">$875.00</div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="blank"> </td>
                                <td colspan="2" class="total-line">Total</td>
                                <td class="total-value">
                                    <div id="total">$875.00</div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="blank"> </td>
                                <td colspan="2" class="total-line">Amount Paid</td>
                                <td class="total-value"><textarea id="paid">$0.00</textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="blank"> </td>
                                <td colspan="2" class="total-line balance">Balance Due</td>
                                <td class="total-value balance">
                                    <div class="due">$875.00</div>
                                </td>
                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="my-4">
                        <button type="button" class="btn btn-primary"><i class="fa fa-print me-2"></i>Create request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/bundle/invoice.bundle.js') }}"></script>
@endsection
