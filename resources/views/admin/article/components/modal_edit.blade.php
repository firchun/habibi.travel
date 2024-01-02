<div class="modal fade edit-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Edit {{ $item->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('article.update', $item->id) }}" enctype="multipart/form-data">
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
                        <label for="name">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            value="{{ $item->title }}">
                    </div>
                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <select name="category" class="form-control @error('category') is-invalid @enderror">
                            <option value="News" @if ($item->category == 'News') selected @endif>News</option>
                            <option value="Promo" @if ($item->category == 'Promo') selected @endif>Promo</option>
                            <option value="Blog" @if ($item->category == 'Blog') selected @endif>Blog</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea id="editor{{ $item->id }}" class="ckeditor form-control @error('description') is-invalid @enderror"
                            name="description">{{ $item->description }}</textarea>
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
