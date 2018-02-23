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
                                        <i class="fa fa-circle text-info"></i> Unique
                                        <i class="fa fa-circle text-danger"></i> Total
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