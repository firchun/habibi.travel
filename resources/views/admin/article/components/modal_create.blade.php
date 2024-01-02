<div class="modal fade create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Galeri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="thumbnail">Foto</label>
                            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                                name="thumbnail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                    </div>
                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <select name="category" class="form-control @error('category') is-invalid @enderror">
                            <option value="News">News</option>
                            <option value="Promo">Promo</option>
                            <option value="Blog">Blog</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea id="editor-create" class="form-control @error('description') is-invalid @enderror" name="description"> Tulis disini..</textarea>
                    </div>

                    <button type="submit" class="btn  btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
