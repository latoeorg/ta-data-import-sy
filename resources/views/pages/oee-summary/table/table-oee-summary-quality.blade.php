<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Quality Rate</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Output (Pcs)</th>
                    <th>Finish Good (Pcs)</th>
                    <th>Reject (Pcs)</th>
                    <th>QR(%)</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td style="min-width: 100px">{{ $item->date }}</td>
                        <td>{{ $item->Output }}</td>
                        <td>{{ $item->Finish_Total }}</td>
                        <td>{{ $item->Reject_Total }}</td>
                        <td>{{ $item->Quality_Rate }} %</td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
