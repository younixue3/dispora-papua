@extends('template/master')
@section('title', 'Page')
@section('content')
    <div class="grid grid-cols-2 gap-x-2">
        <div class="bg-white shadow-lg border rounded-xl">
            <canvas class="h-full" id="AreaCharts" height="120"></canvas>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var AreaCharts = new Chart(document.getElementById('AreaCharts'), {
            type: 'line',
            data: {
                labels: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
                datasets: [
                    {
                        fill: {
                            target: 'origin',
                            above: 'rgba(0,224,7,0.5)',
                            below: 'rgb(0,224,7)'
                        },
                        label: 'Users',
                        data: [12, 19, 3, 5, 7, 3, 15],
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
                        data: [5, 8, 23, 4, 12, 13, 15],
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
    </script>
@endsection
