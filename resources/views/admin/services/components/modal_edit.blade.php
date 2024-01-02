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

                <form method="POST" action="{{ route('services.update', $item->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <select name="icon" class="form-control @error('icon') is-invalid @enderror">
                            <option value="star" @if ($item->icon == 'star') selected @endif>&#9733; Star
                            </option>
                            <option value="folder" @if ($item->icon == 'folder') selected @endif>&#128193; Folder
                            </option>
                            <option value="box" @if ($item->icon == 'box') selected @endif>&#128230; Box
                            </option>
                            <option value="users" @if ($item->icon == 'users') selected @endif>&#128101; Users
                            </option>
                            <option value="links" @if ($item->icon == 'links') selected @endif>&#128279; Links
                            </option>
                            <option value="ship" @if ($item->icon == 'ship') selected @endif>&#9973; Ship
                            </option>
                            <option value="plane" @if ($item->icon == 'plane') selected @endif>&#9992; Plane
                            </option>
                            <option value="ticket" @if ($item->icon == 'ticket') selected @endif>&#127915; Ticket
                            </option>
                        </select>
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
