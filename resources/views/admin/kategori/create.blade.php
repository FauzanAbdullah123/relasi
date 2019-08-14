<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kategori.store') }}" method="post">
                    @csrf
                <div class="form-group">
                  <label for="nama">Nama Kategori</label>
                  <input type="text" name="nama_kategori" id="nama_kategori" class="form-control{{ $errors->has('nama_kategori') ? ' is-invalid' : '' }}" placeholder="Nama kategori" aria-describedby="helpId" required>
                     @if ($errors->has('nama_kategori'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama_kategori') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
        </div>
    </div>
</div>