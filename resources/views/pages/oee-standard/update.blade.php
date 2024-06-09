<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('oee-standard.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Update User
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">OEE Indicator</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukan OEE Indicator"
                            name="name" disabled value="{{ $item->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="standard">Standard Value (%)</label>
                        <input type="number" class="form-control" id="standard"
                            placeholder="Masukan Standard Value (%)" name="standard" required
                            value="{{ $item->standard }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="description" class="form-control" id="description" name="description">{{ $item->description }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
