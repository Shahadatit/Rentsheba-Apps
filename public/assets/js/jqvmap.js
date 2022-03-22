$(function(e){
  'use strict'

	//world map

		$('#world-map-gdp').vectorMap({
			map: 'world_en',
			backgroundColor: null,
			color: '#ffffff',
			hoverOpacity: 0.7,
			selectedColor: '#ec296b',
			enableZoom: true,
			showTooltip: true,
			values: sample_data,
			scaleColors: ['#ec296b', '#4801ff'],
			normalizeFunction: 'polynomial'
		});

		
	//us map
	$('#usa_map').vectorMap({
		map: 'usa_en',
		color: '#9e16b1',
		borderColor: '#fff',
		backgroundColor: 'null',
		regionStyle : {
			initial : {
			fill : ['#ec296b', '#4801ff'],
			}
			},
		hoverColor: '#ec296b',
		showLabels: true
	});

	$('#german').vectorMap({
		map: 'germany_en',
		color: '#3bb001',
		borderColor: '#fff',
		backgroundColor: 'null',
		regionStyle : {
			initial : {
			fill : '#664dc9'
			}
			},
		hoverColor: '#212229',
		showLabels: true
	});
	
	$('#russia').vectorMap({
		map: 'russia_en',
		color: '#3bb001',
		borderColor: '#fff',
		backgroundColor: 'null',
		regionStyle : {
			initial : {
			fill : '#664dc9'
			}
			},
		hoverColor: '#212229',
		showLabels: true
	});
});