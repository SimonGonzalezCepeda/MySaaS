import Chart from 'chart.js';

export default {
    template:'<canvas id="barChartDailySales" style="height: 261px; width: 622px;" width="622" height="261"></canvas>',
    props:{
        labels: {},
        values: {},
        color: {
            default: 'rgba(120,220,220,0.5)'
        }
    },

    ready(){
        var ctx = this.$el.getContext("2d");
        var data = {
            labels: this.labels,
            datasets: [{
                data: this.values,
                label: "My Daily Sales",
                fillColor: this.color,
                strokeColor: "rgba(220,10,180,0.8)",
                highlightFill: "rgba(40,20,200,0.75)",
                highlightStroke: "rgba(22,20,20,1)",
            }]
        }
    var myBarChart = new Chart().Bar(data);
    }

}

