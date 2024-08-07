@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-10 mx-auto">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">FORM</h4>
            @if (Auth::user()->is_admin == 1)
                <a style="padding: 5px 15px;" href="{{ route('leave.admin') }}" class="btn btn-primary btn-danger" type="button"><i class="fas fa-chevron-left"></i> Back</a>
            @else
                <a style="padding: 5px 15px;" href="{{ route('leave.user') }}" class="btn btn-primary btn-danger" type="button"><i class="fas fa-chevron-left"></i> Back</a>
            @endif
        </div>
    </div>
</div>

<div class="col-xl-10 mx-auto">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">APPLICATION FOR LEAVE</h3><br>
            <form action="{{ route('update.leave', $data->id) }}" method="POST" class="needs-validation">
                @csrf

                <div class="row">

                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">OFFICE/DEPARTMENT</label>
                            <select name="office" class="form-select" id="validationCustom04" required>
                                <option selected value="{{ $data->office }}">{{ $data->office }}</option>
                                <option value="Office/Department 1">Office/Department 1</option>
                                <option value="Office/Department 2">Office/Department 2</option>
                                <option value="Office/Department 3">Office/Department 3</option>
                                <option value="Office/Department 4">Office/Department 4</option>
                                <option value="Office/Department 5">Office/Department 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label">NAME</label>
                            <div class="input-daterange input-group" id="validationCustom01">
                                <input value="{{ $data->lname }}" type="text" class="form-control" name="lname" placeholder="Last Name" required/>
                                <input value="{{ $data->fname }}" type="text" class="form-control" name="fname" placeholder="First Name" required/>
                                <input value="{{ $data->mname }}" type="text" class="form-control" name="mname" placeholder="Middle Name (optional)" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                            <label class="form-label">SUFFIX</label>
                            <div class="input-daterange input-group" id="validationCustom01">
                                <input value="{{ $data->suffix }}" type="text" class="form-control" name="suffix" placeholder="e.g. Jr., Sr." />
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <label class="form-label">DATE OF FILING</label>
                        <div class="input-group" id="datepicker2">
                            <input value="{{ $data->date_filing }}" type="text" class="form-control" placeholder="M dd, yyyy" data-date-format="M dd, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true" name="date_filing" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="validationCustom05" class="form-label">POSITION</label>
                            <input value="{{ $data->position }}" name="position" type="text" class="form-control" id="validationCustom05"
                                placeholder="Position" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="validationCustom05" class="form-label">SALARY</label>
                            <input value="{{ $data->salary }}" name="salary" type="number" class="form-control" id="validationCustom05"
                                placeholder="Salary" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">APPROVED BY & DESIGNATION</label>
                            <div class="input-daterange input-group" id="validationCustom01" data-date-format="M dd, yyyy" data-date-autoclose="true">
                                <input value="{{ $data->approved_by }}" type="text" class="form-control" name="approved_by" placeholder="Approved by" required/>
                                <input value="{{ $data->designation }}" type="text" class="form-control" name="designation" placeholder="Designation" required />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-check mb-3"><br>
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                        required>
                    <label class="form-check-label" for="invalidCheck">
                        I hereby certify that the above information is true and correct based on my knowledge.
                    </label>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-success" type="submit" style="padding: 10px 35px;"><i class="fas fa-save"></i>  SUBMIT</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
