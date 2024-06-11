<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Availability Rate</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Available Time</th>
                    <th>Downtime</th>
                    <th>AR(%)</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td style="min-width: 100px">{{ $item->date }}</td>
                        <td>{{ $item->Available_T }}</td>
                        <td>{{ $item->Downtime_Total }}</td>
                        <td>{{ $item->Available_Rate }} %</td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
