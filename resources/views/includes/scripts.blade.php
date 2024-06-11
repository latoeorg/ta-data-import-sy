<!-- jQuery -->
<script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ url('/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ url('/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/dist/js/adminlte.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ url('/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ url('/plugins/toastr/toastr.min.js') }}"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": false,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#defaultTable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": false,
        });

        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        // change to money format all class .money-format
        $('.rupiah-format').each(function() {
            var value = $(this).text();
            $(this).text(new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(value));
        });

        //Date range picker
        $('#date-range').daterangepicker()
    });
</script>


@if (Request::is('/'))
    <script>
        $(function() {
            var labels = {!! json_encode($labels) !!};
            var data = {!! json_encode($data) !!};

            var areaChartData = {
                labels: labels,
                datasets: [{
                        label: 'OEE',
                        backgroundColor: 'rgba(75, 192, 192, 0.9)',
                        borderColor: 'rgba(75, 192, 192, 0.8)',
                        pointRadius: false,
                        pointColor: '#4bc0c0',
                        pointStrokeColor: 'rgba(75, 192, 192, 1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(75, 192, 192, 1)',
                        data: data.OEE
                    },
                    {
                        label: 'Availability Rate',
                        backgroundColor: 'rgba(255, 159, 64, 1)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(255, 159, 64, 1)',
                        pointStrokeColor: '#ff9f40',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(255, 159, 64, 1)',
                        data: data.Available_Rate
                    },
                    {
                        label: 'Performance Rate',
                        backgroundColor: 'rgba(153, 102, 255, 1)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(153, 102, 255, 1)',
                        pointStrokeColor: '#9966ff',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(153, 102, 255, 1)',
                        data: data.Performance_Rate
                    },
                    {
                        label: 'Quality Rate',
                        backgroundColor: 'rgba(255, 205, 86, 1)',
                        borderColor: 'rgba(255, 205, 86, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(255, 205, 86, 1)',
                        pointStrokeColor: '#ffcd56',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(255, 205, 86, 1)',
                        data: data.Quality_Rate
                    }
                ]

            }

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = $.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false
            }

            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })
        })
    </script>
@endif
