
@if ($delete)
<div class="modal fade show" id="modal-default" style="display: block; padding-right: 15px;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Category</h4>
          <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </span>
        </div>
        <div class="modal-body">
          <p>Apa anda yakin ?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Cancel</span>
          <button type="button"  wire:click="destroy({{$category_id}})" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
  
    
@endif