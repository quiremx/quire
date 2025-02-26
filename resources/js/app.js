import './bootstrap';
import 'preline'
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

import ApexCharts from "apexcharts";
import _ from "lodash";
import "preline/dist/helper-apexcharts"; 

window.ApexCharts = ApexCharts;

document.addEventListener("DOMContentLoaded", function () {
    const options = {
        chart: {
            height: 250,
            type: "line",
            toolbar: { show: false },
            zoom: { enabled: false }
        },
        series: [
            { name: "Ingresos", data: [0, 27000, 25000, 27000, 40000] },
            { name: "Gastos", data: [19500, 10000, 19000, 17500, 26000] },
            { name: "Otro", data: [8000, 2200, 6000, 9000, 10000] }
        ],
        stroke: {
            curve: "straight",
            width: [4, 4, 4],
            dashArray: [0, 0, 4]
        },
        grid: {
            strokeDashArray: 0,
            borderColor: "#e5e7eb",
            padding: { top: -20, right: 0 }
        },
        xaxis: {
            categories: [
                "05 Enero 2025",
                "15 Enero 2025",
                "30 Enero 2025",
                "1 Feb 2025",
                "15 Feb 2025"
            ],
            labels: {
                offsetY: 5,
                style: {
                    colors: "#9ca3af",
                    fontSize: "13px",
                    fontFamily: "Inter, sans-serif",
                    fontWeight: 400
                }
            }
        },
        yaxis: {
            min: 0,
            max: 40000,
            tickAmount: 4,
            labels: {
                style: {
                    colors: "#9ca3af",
                    fontSize: "12px",
                    fontFamily: "Inter, sans-serif",
                    fontWeight: 400
                },
                formatter: (value) => (value >= 100 ? `${value / 1000}K` : value)
            }
        }
    };

    const chart = new ApexCharts(document.querySelector("#hs-multiple-line-charts"), options);
    chart.render();
});

