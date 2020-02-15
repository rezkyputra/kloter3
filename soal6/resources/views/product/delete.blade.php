<div class="modal fade" id="deleteModal_{{ $value -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form method="POST" action="/product/{{ $value -> id }}/delete">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLongTitle"><b> Hapus data</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin hapus  <span class="text-danger">"{{ $value -> name }}"</span>  ?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-danger">Ya</button>
                </div>
            </div>
        </div>
    </form>
</div>