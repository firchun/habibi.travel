@extends('layouts.admin')

@section('main-content')
    <section class="pc-container">
        <div class="row justify-items-center">
            <!-- subscribe start -->
            <div class="col-12 mb-4">
                <div class="mb-3">
                    @include('layouts.backend.alert')
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h5 class="card-title">Setting Web</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name Website</label>
                                <input type="text" name="name_web" class="form-control" value="{{ $setting->name_web }}"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label>Description Website</label>
                                <input type="text" name="description_web" value="{{ $setting->description_web }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>About Website</label>
                                <textarea name="about_web" class="form-control">{{ $setting->about_web }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                <div class="card mb-4">
                    <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h5 class="card-title">Setting Time open and close</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label>Time Open</label>
                                    <input type="time" name="time_open" value="{{ $setting->time_open }}"
                                        class="form-control">
                                </div>
                                <div class="col-6 form-group">
                                    <label>Time Close</label>
                                    <input type="time" name="time_closed" value="{{ $setting->time_closed }}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                <div class="card mb-4">
                    <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h5 class="card-title">Setting Contact</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label>Phone number</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $setting->phone }}">
                                </div>
                                <div class="col-6 form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" value="{{ $setting->email }}">
                                </div>
                                <div class="col-12 form-group">
                                    <label>Office Address</label>
                                    <textarea name="address" class="form-control">{{ $setting->address }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('img/cover-login.png') }}" style="width: 90%;">
            </div>
        </div>
    </section>
@endsection
