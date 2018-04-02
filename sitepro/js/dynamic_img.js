// JavaScript Document
//num-所有数据总和
//data-的格式为{name:'断电',y:100,color:colors[0]}的数组
function dynamic(data,num,q,dom){
	       chart = new Highcharts.Chart({
	           chart: {
						renderTo: dom,
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
	             title: {
						text: '',
						style:{
							display:'none'
						}
					},
	             tooltip: {
						formatter: function() {
							return this.point.name +': '+  Math.round((this.y/num)*100) +' %';
						}
					},
	             exporting: {
						enabled: true
					},
				
					//是否显示版权信息
					credits:{
						enabled: false
					},

					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: true,
								color: '#000000',
								connectorColor: '#000000',
								formatter: function() {
									return this.point.name +': '+ this.y +q;
								}
							},
							showInLegend: false
						}
						
					},
					
	 series: [{
						type: 'pie',
						name: 'Browser share',
						data: data
					}]
					
				});
	}