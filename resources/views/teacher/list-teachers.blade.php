
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Teachers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Teachers</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by ID ...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Name ...">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Phone ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Teachers</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="teachers.html" class="btn btn-outline-gray me-2 active"><i
                                            class="feather-list"></i></a>
                                    <a href="{{ route('teacher/grid/page') }}" class="btn btn-outline-gray me-2"><i
                                            class="feather-grid"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i
                                            class="fas fa-download"></i> Download</a>
                                    <a href="{{ route('teacher/add/page') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="DataList" class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread"> 
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Gender</th>
                                        <th>Subject</th>
                                        <th>Section</th>
                                        <th>Mobile Number</th>
                                        <th>Address</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listTeacher as $list)
                                    <tr>
                                        <td>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox"
                                                    value="something">
                                            </div>
                                        </td>
                                        <td hidden class="id">{{ $list->id }}</td>
                                        <td>{{ $list->user_id }}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="teacher-details.html" class="avatar avatar-sm me-2">
                                                    @if (!empty($list->avatar))
                                                        <img class="avatar-img rounded-circle" src="{{ URL::to('images/'.$list->avatar) }}" alt="{{ $list->name }}">
                                                    @else
                                                        <img class="avatar-img rounded-circle" src="{{ URL::to('images/photo_defaults.jpg') }}" alt="{{ $list->name }}">
                                                    @endif
                                                </a>
                                                <a href="teacher-details.html">{{ $list->name }}</a>
                                            </h2>
                                        </td>
                                        <td>10</td>
                                        <td>{{ $list->gender }}</td>
                                        <td>Mathematics</td>
                                        <td>A</td>
                                        <td>{{ $list->mobile }}</td>
                                        <td>{{ $list->address }}</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="{{ url('teacher/edit/'.$list->id) }}" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a class="btn btn-sm bg-danger-light teacher_delete" data-bs-toggle="modal" data-bs-target="#teacherDelete">
                                                    <i class="feather-trash-2 me-1"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- model teacher delete --}}
<div class="modal fade contentmodal" id="teacherDelete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                    class="feather-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('teacher/delete') }}" method="POST">
                    @csrf
                    <div class="delete-wrap text-center">
                        <div class="del-icon">
                            <i class="feather-x-circle"></i>
                        </div>
                        <input type="hidden" name="id" class="e_id" value="">
                        <h2>Sure you want to delete</h2>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-success me-2">Yes</button>
                            <a class="btn btn-danger" data-bs-dismiss="modal">No</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script')
    {{-- delete js --}}
    <script>
        $(document).on('click','.teacher_delete',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.id').text());
        });
    </script>
@endsection

@endsection
