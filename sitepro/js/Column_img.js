// JavaScript Document
//name-柱状名称,每个柱状图所代表的名称，在最下面显示格式（'断电', '软件故障', '硬件故障', '人为故障', '其他'）
//nums-柱状大小和颜色，格式({y: 100,color: colors[0],}, {y: 14,color: colors[1],}, {y: 30,color: colors[2],}, {	y: 50,color: colors[3],	}, {y: 8,color: colors[4],})
//num-所有Y的总合
//q-字符串 单位
function Column_img(name,nums,num,q,dom){
					categories = name
					data = nums
				    chart = new Highcharts.Chart({
					//相关配置
					chart: {
						renderTo: dom, 
						type: 'column'
					},
					//标题
					title: {
						text: '',
						style:{
							display:'none'
						}
					},
				
					//X分类轴
					xAxis: {
						lineColor:'#4b4b4b',
						categories: categories,
						lineWidth:1,
						labels:{rotation:-45,align:'right'},
						title:{
							style:{
							paddingTop:'10px',
							fontSize:'12px',
							display:'block'
							}
						}
					},
					//Y轴标题
					yAxis: {
					
					 title: {
							style: {
                               display:'none'
                            }
						}
					},
					//针对不同类型图表的配置
					plotOptions: {
						column: {
							cursor: 'pointer',
					
							dataLabels: {
								enabled: true,
								color: colors[0],
								style: {
									fontWeight: 'bold'
								},
								formatter: function() {
									return this.y +q;
								}
							}					
						}
					},
					//数据点提示框,当鼠标滑过某点时，以框的形式提示改点的数据，
					tooltip: {
						formatter: function() {
							    var point = this.point,
								s = this.x +':'+ Math.round((this.y/(num))*100) +'%';
								return s;
						}
					},
					//数据列
					series: [{
						data: data
					}],
					//是否显示用不同形状、颜色、文字等 标示不同数据列
					 legend: {
						enabled: false
					},
					//是否显示导出打印信息
					exporting: {
						enabled: true
					},
					//是否显示版权信息
					credits:{
						enabled: false
					}
			
				});
				
				

	
	}