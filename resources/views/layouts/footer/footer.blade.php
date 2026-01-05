
</div>
<footer class="footer pt-3 position-fixed bottom-0 w-100 my-lg-4">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    made with <i class="fa fa-heart"></i> by
                    <a href="/" class="font-weight-bold" target="_blank">LangkahTim</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</main>
@include('layouts.config')
<!--   Core JS Files   -->
<script src="{{ asset('soft-ui/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('soft-ui/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('soft-ui/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('soft-ui/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('bar-chart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['P. Active VS Done'],
            datasets: [{
                label: 'Project Active',
                data: [12],
                borderWidth: 0,
                borderRadius: {
                    bottomLeft: 0,
                    bottomRight: 0,
                    topLeft: 8,
                    topRight: 8,
                },
                borderSkipped: false,
                backgroundColor: ["#cb0c9f"],
                maxBarThickness: 50
            },
                {
                    label: 'Done',
                    data: [25],
                    borderWidth: 0,
                    borderRadius: {
                        bottomLeft: 0,
                        bottomRight: 0,
                        topLeft: 8,
                        topRight: 8,
                    },
                    borderSkipped: false,
                    backgroundColor: ["#3A416F"],
                    maxBarThickness: 50
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMin: 0,
                    suggestedMax: 30,
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    },
                },
                x: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                },
            },
            layout: {
                padding: 15
            }
        }
    });

    /** @type {HTMLCanvasElement} */
    const canvas = document.getElementById("chart-line");

    /** @type {CanvasRenderingContext2D} */
    const ctx2 = canvas.getContext('2d');

    const gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    const gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Organization",
                tension: 0.4,
                borderWidth: 3,
                pointRadius: 0,
                borderColor: "#cb0c9f",
                backgroundColor: gradientStroke1,
                fill: true,
                data: [10, 40, 30, 22, 55, 75, 80, 40, 70],
                maxBarThickness: 6

            },
                {
                    label: "Project",
                    tension: 0.4,
                    borderWidth: 3,
                    pointRadius: 0,
                    borderColor: "#3A416F",
                    backgroundColor: gradientStroke2,
                    fill: true,
                    data: [10, 20, 4, 10, 9, 2, 0, 3, 4],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    suggestedMax: 100,
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#b2b9bf',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('soft-ui/assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
</body>

</html>

