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
                    <a href="{{ route('article') }}" class="btn btn-secondary"> <i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
            <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea id="editor-create" class="form-control @error('description') is-invalid @enderror" name="description"> Tulis disini..</textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="thumbnail">Foto</label>
                                <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                                    name="thumbnail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <select name="category" class="form-control @error('category') is-invalid @enderror">
                                <option value="News">News</option>
                                <option value="Promo">Promo</option>
                                <option value="Blog">Blog</option>
                            </select>
                        </div>
                        <button type="submit" class="btn  btn-primary">Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
