@extends('layouts.admin')

@section('main-content')
    <section class="pc-container">

        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            {{-- @include('layouts.backend.title') --}}
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- subscribe start -->
                <div class="col-12 mb-4">
                    <div class="mb-3">
                        @include('layouts.backend.alert')
                    </div>
                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".create"><i
                            class="fa fa-plus f-16"></i>
                        Create </button>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{ $title }} </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered  mb-0 " id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Icon</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $item)
                                            <tr>
                                                <td width="10">{{ $loop->iteration }}</td>
                                                <td width="100" class="text-center text-primary">
                                                    <img src="{{ asset('img/icon/') . '/' . $item->icon . '.svg' }}"
                                                        alt="{{ $item->icon }}" style="width: 50px;">
                                                </td>
                                                <td>
                                                    <strong>{{ $item->name }}</strong><br>
                                                </td>
                                                <td>
                                                    {{ Str::limit($item->description, 150) }}
                                                </td>

                                                <td width="200">
                                                    <button type="button" class="btn btn-warning btn-md my-1"
                                                        data-toggle="modal" data-target=".edit-{{ $item->id }}"><i
                                                            class="fa fa-edit f-16"></i>
                                                        <span class="d-none d-md-inline">Edit</span>
                                                    </button>
                                                    @include('admin.services.components.modal_edit')
                                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                                        data-target=".delete-{{ $item->id }}"><i
                                                            class="fa fa-trash f-16"></i>
                                                        <span class="d-none d-md-inline">Delete</span>
                                                    </button>

                                                </td>
                                                @include('admin.services.components.modal_delete')
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- subscribe end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
    @include('admin.services.components.modal_create')
@endsection
