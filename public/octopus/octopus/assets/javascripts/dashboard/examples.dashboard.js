
(function( $ ) {

	'use strict';

	
	/*
	Liquid Meter
	*/
	$('#meterSales').liquidMeter({
		shape: 'circle',
		color: '#0088cc',
		background: '#F9F9F9',
		fontSize: '24px',
		fontWeight: '600',
		stroke: '#F2F2F2',
		textColor: '#333',
		liquidOpacity: 0.9,
		liquidPalette: ['#333'],
		speed: 3000,
		animate: !$.browser.mobile
	});

	$('#meterSalesSel a').on('click', function( ev ) {
		ev.preventDefault();

		var val = $(this).data("val"),
			selector = $(this).parent(),
			items = selector.find('a');

		items.removeClass('active');
		$(this).addClass('active');

		// Update Meter Value
		$('#meterSales').liquidMeter('set', val);
	});

	
	/*
	Sparkline: Bar
	*/
	var sparklineBarDashOptions = {
		type: 'bar',
		width: '80',
		height: '55',
		barColor: '#0088cc',
		negBarColor: '#B20000'
	};

	/*
	Sparkline: Line
	*/
	var sparklineLineDashOptions = {
		type: 'line',
		width: '80',
		height: '55',
		lineColor: '#0088cc'
	};

	/*
	Map
	*/
	var vectorMapDashOptions = {
		map: 'world_en',
		backgroundColor: null,
		color: '#FFFFFF',
		hoverOpacity: 0.7,
		selectedColor: '#005599',
		enableZoom: true,
		borderWidth:1,
		showTooltip: true,
		values: sample_data,
		scaleColors: ['#0088cc'],
		normalizeFunction: 'polynomial'
	};

	}).apply( this, [ jQuery ]);