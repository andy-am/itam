

@extends('adminLayout.master')

@section('adminBreadCrumbs')

    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Admin <small>Návštevy</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Návštevy</li>
        </ol>
    </section>

@endsection

@section('contentAdmin')
    <section class="content">

        <div class="col-sm-6">
            <div class="box box-info col-sm-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Aktuálny mesiac</h3>
                    <div class="box-tools pull-right">
                        {{--<button type="button" class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>--}}
                        <button type="button" class="btn btn-danger btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div id="monthlyGraph" style="height: 250px;"></div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="box box-info col-sm-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Aktuálny Rok</h3>
                    <div class="box-tools pull-right">
                        {{--<button type="button" class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>--}}
                        <button type="button" class="btn btn-danger btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div id="yearlyGraph" style="height: 250px;"></div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="box box-info col-sm-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Aktuálny Týždeň</h3>
                    <div class="box-tools pull-right">
                        {{--<button type="button" class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>--}}
                        <button type="button" class="btn btn-danger btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div id="weeklyGraph" style="height: 250px;"></div>
            </div>
        </div>


    </section>

@endsection

@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <script>

        function getVisitsMonthsLastYear(){
            var data = $.ajax({
                type: 'GET',
                url: '/administration/chart/getVisitsMonthsLastYear',
                dataType: 'json',
                complete: function(data) {
                    return data;
                },
                async: false
            });
            return data.responseJSON;
        }

        var yearlyGraph = Morris.Line({
            element: 'yearlyGraph',
            parseTime: false,
            lineWidth: 3,
            data: getVisitsMonthsLastYear(),
            resize: true,
            hideHover: 'auto',
            xkey: 'month',
            ykeys: ['value'],
            labels: ['Počet ľudí'],
            xLabels: "month",
            xLabelFormat: function(x) {
                var months = {'01':'Januar','02':'Februar','03':'Marec','04':'Apríl','05':'Máj','06':'Jún','07':'Júl','08':'August','09':'September','10':'Október','11':'November','12':'December'}

                var month = months[x.label];
                return month;
            },
            dateFormat: function(x) {
                var month = months[new Date(x).getMonth()];
                return month;
            }

        });




        function getVisitsDaysLastMonth(){
            var data = $.ajax({
                type: 'GET',
                url: '/administration/chart/getVisitsDaysLastMonth',
                dataType: 'json',
                complete: function(data) {
                    return data;
                },
                async: false
            });
            return data.responseJSON;
        }
        var monthlyGraph = Morris.Line({
            element: 'monthlyGraph',
            parseTime: false,
            lineWidth: 3,
            data: getVisitsDaysLastMonth(),
            resize: true,
            hideHover: 'auto',
            xkey: 'day',
            ykeys: ['value'],
            labels: ['Počet ľudí']
        });




        function getVisitsOfLastWeek(){
            var data = $.ajax({
                type: 'GET',
                url: '/administration/chart/getVisitsOfLastWeek',
                dataType: 'json',
                complete: function(data) {
                    return data;
                },
                async: false
            });
            return data.responseJSON;
        }




        var weeklyGraph = Morris.Line({
            element: 'weeklyGraph',
            parseTime: false,
            lineWidth: 3,
            data: getVisitsOfLastWeek(),
            resize: true,
            hideHover: 'auto',
            xkey: 'week',
            ykeys: ['value'],
            labels: ['Počet ľudí'],
            grid: true,
            xLabelFormat: function(x) {
                var days = {'0':'Nedeľa','1':'Pondelok','2':'Utorok','3':'Streda','4':'Štvrtok','5':'Piatok','6':'Sobota'}

                var day = days[x.label];
                return day;
            },
            dateFormat: function(x) {
                var day = days[new Date(x).getDay()];
                return day;
            }

        });

        function update() {
            monthlyGraph.setData(getVisitsDaysLastMonth());
            //graph.setData(getDataFromLastYear());
        }
        setInterval(update, 5000);
    </script>
@endsection

