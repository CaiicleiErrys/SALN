@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Application for Leave</h4>
            <a href="{{ route('add.leave') }}" type="button" class="btn btn-primary waves-effect waves-light" style="padding: 8px 15px;">FORM</a>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-12">

            {{-- Cert Index --}}
            <div class="card">
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>OFFICE</th>
                            <th>NAME</th>
                            <th>DATE OF FILING</th>
                            <th>POSITION</th>
                            <th>SALARY</th>
                            <th>APPROVED BY</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($leaves as $leave)
                            <tr>
                                <td class="text-wrap">{{ ($leave->office) }}</td>
                                <td class="text-wrap">{{ ($leave->fname) }}{{ " " }}{{ ($leave->mname) }}{{ " " }}{{ ($leave->lname) }}{{ " " }}{{ ($leave->suffix) }}</td>
                                <td class="text-wrap">{{ ($leave->date_filing) }}</td>
                                <td class="text-wrap">{{ ($leave->position) }}</td>
                                <td class="text-wrap">{{ ($leave->salary) }}</td>
                                <td class="text-wrap">{{ ($leave->approved_by) }} {{ " - " }}{{ ($leave->designation) }}</td>
                                {{-- action button --}}
                                <td class="text-center">
                                    <div>
                                        <a href="{{ route('view.leave', $leave->id) }}" class="btn btn-primary waves-effect waves-light btn-warning" style="padding: 6px 10px;" target="blank"><i class="ri-printer-fill"></i></a>
                                        <a href="{{ route('edit.leave', $leave->id) }}" type="button" class="btn btn-primary waves-effect waves-light" style="padding: 6px 10px;"><i class="ri-file-edit-line"></i></a>

                                        <button type="button" type="button" class="btn btn-primary waves-effect waves-light btn-danger" style="padding: 6px 10px;" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"><i class="ri-delete-bin-2-fill"></i></button>
                                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Confirm Deletion</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <a href="{{ route('delete.leave', $leave->id) }}" type="button" class="btn btn-primary waves-effect waves-light btn-danger" style="padding: 5px 10px;">Confirm</a>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                    </div>
                                </td>
                                {{-- end action --}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            {{-- End Cert Index --}}

        </div>
    </div>

@endsection
