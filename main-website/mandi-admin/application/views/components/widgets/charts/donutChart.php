<div id="<?= $id ?>"></div>
<script>
    var colors = {
        primary: "#106c97",
        secondary: "#7987a1",
        success: "#05a34a",
        info: "#66d1d1",
        warning: "#fbbc06",
        danger: "#ff3366",
        light: "#e9ecef",
        dark: "#060c17",
        muted: "#7987a1",
        gridBorder: "rgba(77, 138, 240, .15)",
        bodyColor: "#000",
        cardBg: "#fff"
    }

    var fontFamily = "'Roboto', Helvetica, sans-serif"
    // Cloud Storage Chart
    $(function() {
        if ($('#<?= $id ?>').length) {
            var options = {
                chart: {
                    height: 260,
                    type: "radialBar"
                },
                series: <?= $series ?>,
                colors: [colors.primary],
                plotOptions: {
                    radialBar: {
                        hollow: {
                            margin: 15,
                            size: "70%"
                        },
                        track: {
                            show: true,
                            background: colors.light,
                            strokeWidth: '100%',
                            opacity: 1,
                            margin: 5,
                        },
                        dataLabels: {
                            showOn: "always",
                            name: {
                                offsetY: -11,
                                show: true,
                                color: colors.muted,
                                fontSize: "13px"
                            },
                            value: {
                                color: colors.bodyColor,
                                fontSize: "30px",
                                show: true
                            }
                        }
                    }
                },
                fill: {
                    opacity: 1
                },
                stroke: {
                    lineCap: "round",
                },
                labels: ["Storage Used"]
            };

            var chart = new ApexCharts(document.querySelector("#<?= $id ?>"), options);
            chart.render();
        }
    })
    // Cloud Storage Chart - END
</script>