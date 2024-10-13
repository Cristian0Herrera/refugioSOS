import Chart from 'chart.js/auto'
import 'chartjs-adapter-luxon'
export default function chart({ cachedData, options, type }) {
    return {
        init: function () {
            this.initChart();

            this.$wire.$on('updateChartData', ({ data }) => {
                const chart = this.getChart();
                chart.data = data;
                chart.update('resize');
            });

            Alpine.effect(() => {
                Alpine.store('theme');
                this.$nextTick(() => {
                    this.getChart().destroy();
                    this.initChart();
                });
            });

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                if (Alpine.store('theme') !== 'system') {
                    return;
                }

                this.$nextTick(() => {
                    this.getChart().destroy();
                    this.initChart();
                });
            });
        },

        initChart: function (data = null) {
            Chart.defaults.animation.duration = 0;

            const borderColor = getComputedStyle(this.$refs.borderColorElement).color;
            const gridColor = getComputedStyle(this.$refs.gridColorElement).color;

            options ??= {};
            options.scales ??= {};
            options.scales.y ??= {};
            options.scales.y.ticks ??= {
                stepSize: 1,
            };

            return new Chart(this.$refs.canvas, {
                type: type,
                data: data ?? cachedData,
                options: options,
            });
        },

        getChart: function () {
            return Chart.getChart(this.$refs.canvas);
        },
    }
}