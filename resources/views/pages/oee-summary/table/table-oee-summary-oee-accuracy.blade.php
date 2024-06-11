<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">OEE Accuracy</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Availability (%)</th>
                    <th>Performance (%)</th>
                    <th>Quality (%)</th>
                    <th>OEE(%)</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td style="min-width: 100px">{{ $item->date }}</td>
                        <td>{{ $item->Available_Rate }} %</td>
                        <td>{{ $item->Performance_Rate }} %</td>
                        <td>{{ $item->Quality_Rate }} %</td>
                        <td>{{ $item->OEE }} %</td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
