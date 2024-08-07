@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Certificate of Appearance</h4>
            <a href="{{ route('add.cert.appearance') }}" type="button" class="btn btn-primary waves-effect waves-light" style="padding: 8px 15px;">FORM</a>
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
                            <th>OFFICIAL/PERSONNEL</th>
                            <th>INCLUSIVE DATES OF APPEARANCE</th>
                            <th>OFFICE/AGENCY</th>
                            <th>VENUE</th>
                            <th>PURPOSE OF TRAVEL</th>
                            <th>APPROVED BY</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($appearances as $appearance)
                            <tr>
                                <td class="text-wrap">{{ ($appearance->fullname) }}</td>
                                <td class="text-wrap">{{ ($appearance->date_start) }}{{ " - " }}{{ ($appearance->date_end) }}</td>
                                <td class="text-wrap">{{ ($appearance->office) }}</td>
                                <td class="text-wrap">{{ ($appearance->venue) }}{{ ", " }}{{ ($appearance->venue_address) }}</td>
                                <td class="text-wrap">{{ ($appearance->purpose) }}</td>
                                <td class="text-wrap">{{ ($appearance->approved_by) }}{{ " - " }}{{ ($appearance->designation) }}</td>
                                {{-- action button --}}
                                <td class="text-center">
                                    <div>
                                        <a href="{{ route('view.cert.appearance', $appearance->id) }}" class="btn btn-primary waves-effect waves-light btn-warning" style="padding: 6px 10px;" target="blank"><i class="ri-printer-fill"></i></a>
                                        <a href="{{ route('edit.cert.appearance', $appearance->id) }}" type="button" class="btn btn-primary waves-effect waves-light" style="padding: 6px 10px;"><i class="ri-file-edit-line"></i></a>

                                        <button type="button" type="button" class="btn btn-primary waves-effect waves-light btn-danger" style="padding: 6px 10px;" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"><i class="ri-delete-bin-2-fill"></i></button>
                                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Confirm Deletion</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <a href="{{ route('delete.cert.appearance', $appearance->id) }}" type="button" class="btn btn-primary waves-effect waves-light btn-danger" style="padding: 5px 10px;">Confirm</a>
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
