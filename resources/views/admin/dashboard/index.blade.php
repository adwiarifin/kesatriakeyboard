@extends('admin.master')

@section('content')
					<div class="row">
                        <div class="col-md-8">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Page Views and Visitors</h4>
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
<script type="text/javascript" src="{{ url('js/chartist-plugin-pointlabels.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        
        // Chart 1
        //var dataVisitors = ;

        //var optionVisitors = ;

        Chartist.Line('#chartVisitors', {
            labels: {{ json_encode($labels) }},
            series: [ {{ json_encode($pageViewsUnique) }}, {{ json_encode($visitorsUnique) }} ]
        }, {
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
            showPoint: true,
            fullWidth: false,
            plugins: [
                Chartist.plugins.ctPointLabels({
                  textAnchor: 'middle'
                })
            ]
        });

        // Chart 2
        var dataUserTypes = {
            labels: {{ $userTypes->map(function($item){return $item['sessions'];})->toJson() }},
            series: {{ $userTypes->map(function($item){return $item['sessions'];})->toJson() }}
        };

        Chartist.Pie('#chartUserTypes', dataUserTypes);
    });
</script>
@endsection