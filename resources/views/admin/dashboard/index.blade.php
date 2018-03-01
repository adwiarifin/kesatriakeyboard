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
                                        <?php $i = 0; ?>
                                        @foreach($userTypes->pluck('type') as $type)
                                        <i class="fa fa-circle text-{{ $color[$i++] }}"></i> {{ $type }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Most Visited Pages</h4>
                                    <p class="card-category">7 Days performance</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>URL</th>
                                                    <th>Page Views</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($mostVisitedPages as $row)
                                                <tr>
                                                    <td><a href="{{ url($row['url']) }}" target="_blank">{{ $row['url'] }}</a></td>
                                                    <td width="100%">{{ $row['pageViews'] }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Top Referrers</h4>
                                    <p class="card-category">7 Days performance</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Referrers</th>
                                                    <th>Page Views</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($topReferrers as $row)
                                                <tr>
                                                    <td><a href="{{ url($row['url']) }}" target="_blank">{{ $row['url'] }}</a></td>
                                                    <td width="100%">{{ $row['pageViews'] }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Top Browsers</h4>
                                    <p class="card-category">7 Days performance</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartTopBrowsers" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <?php $i = 0; ?>
                                        @foreach($topBrowsers->pluck('browser') as $browser)
                                        <i class="fa fa-circle text-{{ $color[$i++] }}"></i> {{ $browser }}
                                        @endforeach
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
            labels: {{ $vpUnique->pluck('date')->map(function($item){return $item->day;})->toJson() }},
            series: [ {{ $vpUnique->pluck('pageViews')->toJson() }}, {{ $vpUnique->pluck('visitors')->toJson() }} ]
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
            labels: {{ $userTypes->pluck('sessions')->toJson() }},
            series: {{ $userTypes->pluck('sessions')->toJson() }}
        };
        Chartist.Pie('#chartUserTypes', dataUserTypes);

        // Chart 3
        var dataTopBrowsers = {
            labels: {{ $topBrowsers->pluck('sessions')->toJson() }},
            series: {{ $topBrowsers->pluck('sessions')->toJson() }}
        };
        Chartist.Pie('#chartTopBrowsers', dataTopBrowsers);

        
    });
</script>
@endsection