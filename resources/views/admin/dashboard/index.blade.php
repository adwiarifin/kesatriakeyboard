@extends('admin.master')

@section('content')
					<div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Visitors</h4>
                                    <p class="card-category">7 Days performance</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartVisitors" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Total
                                        <i class="fa fa-circle text-danger"></i> Unique
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('addon_script')
<script type="text/javascript">
    $(document).ready(function() {
        
        var dataVisitors = {
            labels: {{ json_encode($labels) }},
            series: {{ json_encode($visitors) }}
            /*labels: ['9:00AM', '12:00AM', '3:00PM', '6:00PM', '9:00PM', '12:00PM', '3:00AM', '6:00AM'],
            series: [
                [287, 385, 490, 492, 554, 586, 698, 695, 752, 788, 846, 944],
                [67, 152, 143, 240, 287, 335, 435, 437, 539, 542, 544, 647],
                [67, 113, 67, 108, 190, 239, 307, 308, 439, 410, 410, 509]
            ]*/
        };

        var optionVisitors = {
            lineSmooth: false,
            showArea: true,
            height: "245px",
            axisX: {
                showGrid: true,
            },
            lineSmooth: Chartist.Interpolation.simple({
                divisor: 3
            }),
            showLine: false,
            showPoint: false,
            fullWidth: false
        };

        Chartist.Line('#chartVisitors', dataVisitors, optionVisitors);
    });
</script>
@endsection