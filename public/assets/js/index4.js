function echart11(){


  var chartdata = [
    {
      name: 'Page Views',
      type: 'bar',
      data: [10, 15, 9, 18, 10, 15, 22]
    },
    {
      name: 'New Visitors',
      type: 'bar',
      data: [10, 14, 10, 15, 9, 25, 16]
    }
  ];

  var chart = document.getElementById('echart11');
  var barChart = echarts.init(chart);

  var option = {
    grid: {
      top: '6',
      right: '0',
      bottom: '17',
      left: '25',
    },
    xAxis: {
      data: [ 'Mon', 'Tues' , 'Wed', 'Thurs' , 'Fri' , 'Sat' , 'Sun'],
      axisLine: {
        lineStyle: {
          color: 'rgba(227, 237, 252,0.3)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#c6c9d3'
      }
    },
	tooltip: {
		show: true,
		showContent: true,
		alwaysShowContent: true,
		triggerOn: 'mousemove',
		trigger: 'axis',
		axisPointer:
		{
			label: {
				show: false,
			}
		}

	},
    yAxis: {
      splitLine: {
        lineStyle: {
          color: 'rgba(227, 237, 252,0.3)'
        }
      },
      axisLine: {
        lineStyle: {
          color: 'rgba(227, 237, 252,0.3)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#c6c9d3'
      }
    },
    series: chartdata,
    color:[ myVarVal1,myVarVal],
	barMaxWidth: 15
	
  };

  barChart.setOption(option);


};


