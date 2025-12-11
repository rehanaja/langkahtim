<!-- Modal -->
<div class="modal fade" id="modalHapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel">Hapus {{ $title }} ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
        <div class="row">
            <div class="col-6">
                Nama
            </div>
            <div class="col-6">
                : {{ $item->nama }}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Email
            </div>
            <div class="col-6">
                : 
                <span class="badge badge-info">{{ $item->email }}</span>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Role
            </div>
            <div class="col-6">
                : 
                @if ($item->role == "Ketua")
                <span class="badge badge-dark">{{ $item->role }}</span>
                @else
                <span class="badge badge-light">{{ $item->role }}</span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Status
            </div>
            <div class="col-6">
                : 
                @if ($item->is_tugas == false) 
                <span class="badge badge-danger">Belum ditugaskan</span>
                @else
                <span class="badge badge-success">Sudah ditugaskan</span>
                @endif
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
            <i class="fas fa-times mr-1"></i>Tutup
        </button>

        <form action="{{ route('userDestroy', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            
            <button type="submit" class="btn btn-sm btn-danger">
                <i class="fas fa-trash mr-1"></i>Hapus
            </button>
        </form>
      </div>
    </div>
  </div>
</div>