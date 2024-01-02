<div class="modal fade edit-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Edit {{ $item->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('galeri.update', $item->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($item->thumbnail != null || $item->thumbnail != '')
                        <center>
                            <img src="{{ Storage::url($item->thumbnail) }}" height="150px">
                        </center>
                    @endif
                    <div class="form-group">
                        <div class="form-group">
                            <label for="thumbnail">Foto </label>
                            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                                name="thumbnail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ $item->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" class="form-control @error('type') is-invalid @enderror">
                            <option value="galeri" @if ($item->type == 'galeri') selected @endif>Galeri</option>
                            <option value="slider" @if ($item->type == 'slider') selected @endif>Side Show</option>
                            <option value="discover" @if ($item->type == 'discover') selected @endif>Discover</option>
                            <option value="about" @if ($item->type == 'about') selected @endif>About Image
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn  btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script src="{{ asset('admin_theme') }}/assets/plugins/ckeditor/ckeditor.js"></script>
    <!-- CKEditor -->
    <script src="{{ asset('admin_theme') }}/assets/plugins/ckeditor/ckeditor.js"></script>
@endpush
