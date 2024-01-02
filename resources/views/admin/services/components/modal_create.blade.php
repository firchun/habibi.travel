<div class="modal fade create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Create</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <select name="icon" class="form-control @error('icon') is-invalid @enderror">
                            <option value="star">&#9733; Star</option>
                            <option value="folder">&#128193; Folder</option>
                            <option value="box">&#128230; Box</option>
                            <option value="users">&#128101; Users</option>
                            <option value="links">&#128279; Links</option>
                            <option value="ship">&#9973; Ship</option>
                            <option value="plane">&#9992; Plane</option>
                            <option value="ticket">&#127915; Ticket</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                    </div>

                    <button type="submit" class="btn  btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
