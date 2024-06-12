<!-- Modal -->
<div class="modal fade" id="formDelete" tabindex="-1" role="dialog" aria-labelledby="formDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('oee.destroy-by-date') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formDeleteLabel">
                        Delete OEE Data
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
