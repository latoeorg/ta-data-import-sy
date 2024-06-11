<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('oee.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Import OEE Summary
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="month" class="form-control" id="date" placeholder="Masukan Date"
                            name="date" required value="{{ date('Y-m') }}">
                    </div>
                    <div class="form-group">
                        <label for="file">File</label>
                        <input id="file" type="file" name="file" required class="form-control-file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Import
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
