<!-- Modal -->
<div class="modal fade" id="modalDeleteTugas{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                : {{ $item->user->nama }}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Email
            </div>
            <div class="col-6">
                : 
                <span class="badge badge-info">{{ $item->user->email }}</span>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Role
            </div>
            <div class="col-6">
                : 
                <span class="badge badge-light">{{ $item->user->role }}</span>
            </div>
        </div>

      </div>
    

      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
            <i class="fas fa-times mr-1"></i>Tutup
        </button>

        <form action="{{ route('tugasDestroy', $item->id) }}" method="POST">
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

<!-- Modal -->
<div class="modal fade" id="modalShowTugas{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="exampleModalLabel">Detail {{ $title }} </h5>
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
                : {{ $item->user->nama }}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Email
            </div>
            <div class="col-6">
                : 
                <span class="badge badge-info">{{ $item->user->email }}</span>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Role
            </div>
            <div class="col-6">
                : 
                <span class="badge badge-light">{{ $item->user->role }}</span>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>