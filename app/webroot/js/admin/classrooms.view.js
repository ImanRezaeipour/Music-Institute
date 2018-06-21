$(document).ready(function (e) {
	$('#list').jqGrid({
		shrinkToFit:true,
		url        :'request?request=view',
		datatype   :'json',
		mtype      :'GET',
		colNames   :['Id', 'Room', 'Day', 'Start Time', 'End Time', 'Empty'],
		colModel   :[
			{
				name :'id',
				index:'classroom_id',
				width:'',
				align:'left'
			},
			{
				name     :'room',
				index    :'classroom_room',
				width    :'',
				align    :'left',
				editable :true,
				edittype :'text',
				editrules:{
					required:true,
					number  :true
				}
			},
			{
				name       :'day',
				index      :'classroom_day',
				width      :'',
				align      :'left',
				editable   :true,
				edittype   :'select',
				editoptions:{
					value:{
						1:'Sunday',
						2:'Monday',
						3:'Tuesday',
						4:'Wednesday',
						5:'Thursday',
						6:'Friday',
						7:'Saturday'
					}
				},
				editrules  :{
					required:true
				}
			},
			{
				name     :'start time',
				index    :'classroom_start_time',
				width    :'',
				align    :'left',
				editable :true,
				edittype :'text',
				editrules:{
					required:true,
					time    :true
				}
			},
			{
				name     :'end time',
				index    :'classroom_end_time',
				width    :'',
				align    :'left',
				editable :true,
				edittype :'text',
				editrules:{
					required:true,
					time    :true
				}
			},
			{
				name     :'empty',
				index    :'classroom_empty',
				width    :'',
				align    :'left',
				editable :true,
				edittype :'checkbox',
				editrules:{
					required:true
				}
			}
		],
		rowNum     :10,
		rowList    :[10, 25, 50, 100],
		pager      :'#pager',
		sortname   :'classroom_id',
		sortorder  :'asc',
		caption    :'',
		//onSelectRow:function (id) {
		//	$(this).jqGrid('viewGridRow', id, { caption:'View Record' });
		//}
	});
	$('#list').jqGrid('navGrid', '#pager', {
		edit  :false,
		add   :false,
		del   :false,
		view  :false,
		search:true
	});
	$(window).bind('resize',function () {
		$("#list").setGridWidth($(window).width() - 190);
	}).trigger('resize');
});