@extends('template/master')
@section('title', 'Page')
@section('content')
    <div class="grid grid-cols-4 gap-5">
        <div class="bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-purple-500 text-white rounded-full px-5 py-4 fas fa-shopping-bag"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">{{$atlet}}</span>
                <div class="-mt-3 text-lg">Total Atlet</div>
            </div>
        </div>
        <div class="bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-green-500 text-white rounded-full px-3 py-4 fas fa-users"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl"></span>
                <div class="-mt-3 text-lg">Harian Atlet</div>
            </div>
        </div>
        <div class="bg-white col-span-3 shadow-lg border rounded-xl">
            <canvas class="h-full" id="AreaCharts" height="120"></canvas>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var tanggal = [];
        var atlet = [[]];
        // window.setInterval( today_atlet, 5000);

        // function today_atlet() {
        // }

        window.setInterval( charts(), 1000);

        function charts() {
            $(document).ready(function (e) {
                $.ajax({
                    type: "GET",
                    url: window.location.origin + '/statistic',
                    error: function (e) {
                    },
                    success: function (data) {
                        data.past.forEach(function (val) {
                            tanggal.push(val.tanggal)
                        });
                        data.past.forEach(function (val) {
                            atlet[0].push(val.jumlah)
                        });
                        $.ajax({
                            type: 'GET',
                            url: window.location.origin + '/live_statistic',
                            error: function (e) {
                                console.log(e)
                            },
                            success: function (data) {
                                // if(atlet[0][5] == null) {
                                tanggal.push('Today')
                                atlet[0].push(parseInt(data));
                                console.log(atlet);
                                var AreaCharts = new Chart(document.getElementById('AreaCharts'), {
                                    type: 'line',
                                    data: {
                                        labels: tanggal,
                                        datasets: [
                                            {
                                                fill: {
                                                    target: 'origin',
                                                    above: 'rgba(0,224,7,0.5)',
                                                    below: 'rgb(0,224,7)'
                                                },
                                                label: 'Atlet',
                                                data: atlet[0],
                                                backgroundColor: [
                                                    'rgba(0,224,7,0.5)',
                                                ],
                                                borderColor: [
                                                    'rgba(0,224,7,1)',
                                                ],
                                                borderWidth: 2,
                                                tension: 0.5,
                                            },
                                            {
                                                fill: {
                                                    target: 'origin',
                                                    above: 'rgba(147,83,255,0.5)',
                                                    below: 'rgb(147,83,255)'
                                                },
                                                label: 'Orders',
                                                data: [],
                                                backgroundColor: [
                                                    'rgba(147,83,255, 0.5)',
                                                ],
                                                borderColor: [
                                                    'rgb(147,83,255)',
                                                ],
                                                borderWidth: 2,
                                                tension: 0.5,
                                            },
                                        ]
                                    },
                                    options: {
                                        scales: {
                                            xAxes: {
                                                display: true,
                                            },
                                            yAxes: {
                                                display: true,
                                            }
                                        },
                                        plugins: {
                                            filler: {
                                                propagate: true
                                            }
                                        },
                                        responsive: true,
                                        showLine: true
                                    },
                                });
                                // } else {
                                //     atlet[0][5] = parseInt(data)
                                // }
                            }
                        })
                    }
                });
                // arr[0].past.forEach(function (value) {
                //     console.log(value.tanggal)
                // })
            })
        }
    </script>
@endsection
