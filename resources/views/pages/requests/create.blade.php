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
                    </div>

                    <form class="g-3 my-3">
                        <div class="row mb-1">
                            <div class="col-6">
                                <label for="TextInput" class="form-label">Select Code</label>
                                <select class="form-control">
                                    <option>--select--</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <label for="TextInput" class="form-label">Quantity</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-1">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <select class="form-control">
                                    <option>--select--</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-1">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </form>

                    <div class="my-4 text-right">
                        <button type="button" class="btn btn-primary"><i class="fa fa-send me-2"></i>Create request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/bundle/invoice.bundle.js') }}"></script>
@endsection
