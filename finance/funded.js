function generateStackedBarChart() {
    const seriesData = [
      {
        name: 'Avishkar Hyperloop',
        data: [44, 55, 41, 64, 22, 43, 21]
      },
      {
        name: 'Raftar',
        data: [53, 32, 33, 52, 13, 44, 32]
      },
      {
        name: 'Plenome',
        data: [12, 17, 11, 9, 15, 11, 20]
      },
      {
        name: 'Agnirath',
        data: [10, 22, 23, 3, 23, 26, 30]
      }
    ];
  
    const stackedBarChartOptions = {
      chart: {
        type: 'bar',
        height: 250,
        stacked: true,
      },
      plotOptions: {
        bar: {
          horizontal: true,
        },
      },
      series: seriesData,
      xaxis: {
        categories: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
      },
      legend: {
        position: 'top',
      },
    };
  
    const stackedBarChart = new ApexCharts(document.querySelector("#chart"), stackedBarChartOptions);
    stackedBarChart.render();
  }
  
  function averageFundPerStartUp() {
    const averageFundOptions = {
      series: [70, 65, 80, 75], // Example data for multiple entities
      chart: {
        height: 350,
        type: 'radialBar',
      },
      plotOptions: {
        radialBar: {
          hollow: {
            size: '100%',
          }
        },
      },
      labels: ['Entity 1', 'Entity 2', 'Entity 3', 'Entity 4'], // Example labels for multiple entities
      responsive: [{
        breakpoint: 480, // Define your desired breakpoint
        options: {
          chart: {
            height: 200 // Adjust the height for responsiveness at this breakpoint
          }
        }
      }]
    };
  
    const averageFundChart = new ApexCharts(document.querySelector("#chart1"), averageFundOptions);
    averageFundChart.render();
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    generateStackedBarChart();
    averageFundPerStartUp();
  });