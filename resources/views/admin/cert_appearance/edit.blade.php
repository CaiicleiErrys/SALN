@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-10 mx-auto">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">EDIT DATA - FORM</h4>
            @if (Auth::user()->is_admin == 1)
                <a style="padding: 5px 15px;" href="{{ route('cert.appearance.admin') }}" class="btn btn-primary btn-danger" type="button"><i class="fas fa-chevron-left"></i> Cancel</a>
            @else
                <a style="padding: 5px 15px;" href="{{ route('cert.appearance') }}" class="btn btn-primary btn-danger" type="button"><i class="fas fa-chevron-left"></i> Cancel</a>
            @endif
        </div>
    </div>
</div>

<div class="col-xl-10 mx-auto">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">CERTIFICATE OF APPEARANCE</h3><br>
            <form action="{{ route('update.cert.appearance', $data->id) }}" method="POST" class="needs-validation">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Full Name</label>
                            <input name="fullname" value="{{ $data->fullname }}" type="text" class="form-control" id="validationCustom01"
                                placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Inclusive Dates of Appearance</label>
                            <div class="input-daterange input-group" id="datepicker6" data-date-format="M dd, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                <input type="text" value="{{ $data->date_start }}" class="form-control" name="date_start" placeholder="Start Date" />
                                <input type="text" value="{{ $data->date_end }}" class="form-control" name="date_end" placeholder="End Date" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="validationCustom04" class="form-label">Office</label>
                            <select name="office" class="form-select" id="validationCustom04" required>
                                <option selected value="{{ $data->office }}">{{ $data->office }}</option>
                                <option value="IMSD">IMSD</option>
                                <option value="TSSD">TSSD</option>
                                <option value="ORD">ORD</option>
                                <option value="MALSU">MALSU</option>
                                <option value="ICT">ICT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="validationCustom05" class="form-label">Venue</label>
                            <input name="venue" value="{{ $data->venue }}" type="text" class="form-control" id="validationCustom05" placeholder="Venue" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="validationCustom05" class="form-label">Venue Address</label>
                            <input name="venue_address" value="{{ $data->venue_address }}" type="text" class="form-control" id="validationCustom05"
                                placeholder="Venue address" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="validationCustom05" class="form-label">Purpose of Travel</label>
                            <input name="purpose" value="{{ $data->purpose }}" type="text" class="form-control" id="validationCustom05" placeholder="Purpose" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="validationCustom05" class="form-label">Approved by</label>
                            <input name="approved_by" value="{{ $data->approved_by }}" type="text" class="form-control" id="validationCustom05"
                                placeholder="Approved by" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="validationCustom05" class="form-label">Designation</label>
                            <input name="designation" value="{{ $data->designation }}" type="text" class="form-control" id="validationCustom05"
                                placeholder="Designation" required>
                        </div>
                    </div>

                </div>

                <div class="form-check mb-3"><br>
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                        required>
                    <label class="form-check-label" for="invalidCheck">
                        I hereby certify on the appearance to this Office of the official/personnel listed hereunder;
                    </label>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-success" type="submit" style="padding: 10px 35px;"><i class="fas fa-save"></i>  SAVE CHANGES</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
