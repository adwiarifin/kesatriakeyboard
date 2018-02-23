@extends('admin.master')

@section('content')
					<div class="row">
                        <div class="col-md-8">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Visitors and Page Views</h4>
                                    <p class="card-category">7 Days performance</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartVisitors" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Page Views
                                        <i class="fa fa-circle text-danger"></i> Visitors
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">User Types</h4>
                                    <p class="card-category">7 Days performance</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartUserTypes" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> New Visitor
                                        <i class="fa fa-circle text-danger"></i> Returning Visitor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('addon_script')
<script type="text/javascript">
    $(document).ready(function() {
        
        // Chart 1
        var dataVisitors = {
            labels: {{ json_encode($labels) }},
            series: [ {{ json_encode($pageViewsUnique) }}, {{ json_encode($visitorsUnique) }} ]
        };

        var optionVisitors = {
            lineSmooth: false,
            showArea: true,
            height: "245px",
            axisX: {
                showGrid: false,
            },
            lineSmooth: Chartist.Interpolation.simple({
                divisor: 3
            }),
            showLine: false,
            showPoint: false,
            fullWidth: false
        };

        Chartist.Line('#chartVisitors', dataVisitors, optionVisitors);

        // Chart 2
        var dataPageViews = {
            labels: {{ $userTypes->map(function($item){return $item['sessions'];})->toJson() }},
            series: {{ $userTypes->map(function($item){return $item['sessions'];})->toJson() }}
        };

        var optionPageViews = {
            donut: true,
            donutWidth: 40,
            startAngle: 0,
            total: 100,
            showLabel: false,
            axisX: {
                showGrid: false
            }
        };

        Chartist.Pie('#chartUserTypes', dataPageViews);
    });
</script>
@endsection