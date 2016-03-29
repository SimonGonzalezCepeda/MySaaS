import Chart from 'chart.js';

export default {
    template: <canvas id="barChartDailySales" style="height: 261px; width: 622px;" width="622" height="261"></canvas>
    ready(){
        var ctx = document.getElementById("barChartDailySales").getContext("2d");
        var data = {
            labels: ["1","2","3","4","5","6","7","8","9","10","11"], //TODO make it to work with Json
            datasets: [{
                data: [950, 1589, 1589, 2500, 3400, 456],
                label: "My Daily Sales",
                fillColor: "rgba(220,220,220,1)",
                strokeColor: "rgba(220,10,180,0.8)",
                highlightFill: "rgba(40,20,200,0.75)",
                highlightStroke: "rgba(22,20,20,1)",
            }]
        }
    var myBarChart = new Chart().Bar(data);
    }
}

