@extends('layouts.app')

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex align-items-center flex-column flex-lg-row">
                    <img src="{{ asset('commons/images/patient.png') }}" alt="" class="rounded" style="max-width: 220px;">
                    <div class="ms-md-5 m-0 mt-4 mt-lg-0 text-lg-start text-center">
                        <h4 class="fw-bold text-uppercase">{{ $patient->fullname() ?? "N/A" }} <small class="text-muted">(No. {{ $patient->number }}) </small> <button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Edit</button></h4>
                        <div
                            class="d-flex flex-wrap justify-content-center justify-content-lg-start align-items-center mb-4 mt-2">
                            <div class="me-3 me-md-5">
                                <small class="text-muted">Age</small>
                                <div class="mb-0 fw-bold">{{ age($patient->dob) }}</div>
                            </div>
                            <div class="me-3 me-md-5">
                                <small class="text-muted">Gender</small>
                                <div class="mb-0 fw-bold">{{ $patient->gender }}</div>
                            </div>
                            <div class="me-3 me-md-5">
                                <small class="text-muted">Marital Status</small>
                                <div class="mb-0 fw-bold">{{ $patient->marital_status }}</div>
                            </div>
                            <div class="me-3 me-md-5">
                                <small class="text-muted">Phone</small>
                                <div class="mb-0 fw-bold">{{ $patient->phone }}</div>
                            </div>
                        </div>
                        <div class="h6">Email Address: <strong>{{ $patient->email ?? "N/A" }}</strong></div>
                        <div class="h6">Contact Address: <strong>{{ $patient->address ?? "N/A" }}</strong></div>

                        <div class="mt-4">
                            <a class="btn btn-primary" href="#">Add Encounter</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer pb-0 pt-1">
                    <ul class="nav nav-tabs tab-card border-bottom-0 tab-card" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#Instructor-Course" role="tab" aria-selected="false">Encounters</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Curriculum-Course" role="tab" aria-selected="false">Prescriptions</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Reviews-Course"
                                                role="tab" aria-selected="false">Payments</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Instructor-Course" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            @if(count($patient->encounters) > 0)
                                <table class="table card-table table-hover mb-0 datatable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Action</th>
                                        <th>Number</th>
                                        <th>Created By</th>
                                        <th>Disease</th>
                                        <th>Reason</th>
                                        <th>Referral</th>
                                        <th>Prescription</th>
                                        <th>Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($patient->encounters as $encounter)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-left">
                                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa fa-medkit"></i></a>
                                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-outline-secondary delete" model-name="{{ class_basename($encounter) }}" model-id="{{ $encounter->id }}"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <td>{{ $encounter->reference }}</td>
                                            <td>{{ $encounter->createdBy->fullname() ?? null }}</td>
                                            <td>{{ $encounter->disease->name ?? null }}</td>
                                            <td>{{ $encounter->reason ?? null }}</td>
                                            <td>{{ $encounter->referral_status == 1 ? 'Yes' : 'No' }}</td>
                                            <td>{{ $encounter->prescriptions->count() ?? null }}</td>
                                            <td>{{ formatDate($encounter->created_at)}}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="text-center">
                                    <img src="{{ asset('assets/img/no-data.svg') }}" class="w120" alt="No Data">
                                    <div class="mt-4 mb-3">
                                        <span class="text-muted">No records to show</span>
                                    </div>
                                </div>
                           @endif
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade card " id="Curriculum-Course" role="tabpanel">
                    <div class="card-body">
                        @if(count($patient->encounters) > 0)
                            <table class="table card-table table-hover mb-0 datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Action</th>
                                    <th>Number</th>
                                    <th>Created By</th>
                                    <th>Disease</th>
                                    <th>Reason</th>
                                    <th>Referral</th>
                                    <th>Prescription</th>
                                    <th>Date</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($patient->encounters as $encounter)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="text-left">
                                            <a href="#" class="btn btn-sm btn-outline-secondary printPrescription"><i class="fa fa-print"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary delete" model-name="{{ class_basename($encounter) }}" model-id="{{ $encounter->id }}"><i class="fa fa-trash"></i></a>
                                        </td>
                                        <td>{{ $encounter->reference }}</td>
                                        <td>{{ $encounter->createdBy->fullname() ?? null }}</td>
                                        <td>{{ $encounter->disease->name ?? null }}</td>
                                        <td>{{ $encounter->reason ?? null }}</td>
                                        <td>{{ $encounter->referral_status == 1 ? 'Yes' : 'No' }}</td>
                                        <td>{{ $encounter->prescriptions->count() ?? null }}</td>
                                        <td>{{ formatDate($encounter->created_at)}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="text-center">
                                <img src="{{ asset('assets/img/no-data.svg') }}" class="w120" alt="No Data">
                                <div class="mt-4 mb-3">
                                    <span class="text-muted">No records to show</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade card" id="Reviews-Course" role="tabpanel">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/no-data.svg') }}" class="w120" alt="No Data">
                            <div class="mt-4 mb-3">
                                <span class="text-muted">No records to show</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="prescriptionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Prescription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body custom_scroll printarea">
                    <table class="card p-2">
                        <tr>
                            <td></td>
                            <td style=" width: 100%;">
                                <table class="table table-borderless mb-0" width="100%" cellpadding="0"
                                       cellspacing="0">
                                    <tr>
                                        <td style="text-align: center;">
                                            <img src="{{ asset('commons/images/board-logo.png') }}" width="100" />
                                            <h4 style="margin-bottom: 0;">Prescription Details</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0;">
                                            <table width="100%">
                                                <tr>
                                                    <td class="text-left mb-0 pb-0">Facility: <strong>{{ $patient->facility->code ?? null }}</strong> <br>Ward/LGA: {{ $patient->facility->ward->name ?? null }}/{{ $patient->facility->ward->lga->name ?? null }}<br>
                                                        Phone: {{ $patient->facility->phone ?? null }} |
                                                        Email: <a
                                                            href="#"
                                                            class="__cf_email__"
                                                            data-cfemail="315c5043545a7155505f58545d1f525e5c">{{ $patient->facility->email ?? null }}</a><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left mt-0">Patient: <strong>{{ $patient->fullname() ?? null }}</strong> | {{ $patient->phone ?? null }}<br>
                                                        Address: <a href="#">{{ $patient->address ?? null }}</a><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table
                                                            class="table table-borderless table-striped mb-0"
                                                            cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td style="text-align: left;">ClinicalDevice_Infusion set(Generic_1)</td>
                                                                <td style="text-align: right;">N230.00
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left;">ClinicalDevice_Face Mask(Generic_1)</td>
                                                                <td style="text-align: right;">N120.00
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"
                                                                    width="80%"><strong>Total</strong>
                                                                </td>
                                                                <td style="text-align: right;">N400.00
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%" style="text-align: center; margin-top: 40px;">
                                    <tr>
                                        <td class="aligncenter content-block"><i>Generated on {{ formatDate(date('Y-m-d')) }}</i>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="print();" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function(){
            let body = $('body');
            body.on('click', '.printPrescription', function(){
                $('#prescriptionModal').modal('show')
            })
        })
    </script>
@endpush
