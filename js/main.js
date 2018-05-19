$('.red-but').on('click',function(){
	var id = $('#field-quest').attr('attr1');
	var estimate = $('#field-quest').attr('attr2');
	$.ajax({
		type: 	'POST',
		url:	'red.php',
		data:{
			id:id,
			estimate:estimate
		},
		success: function(data){
			var result = JSON.parse(data);
			if(result['is_end']!=1){
				$('#field-quest-p').text(result['question']);
				$('#numero').text(result['number']);
				$('.current-estimate').text(result['estimate']);
				$('#field-quest').attr('attr1',result['id']);
				$('#field-quest').attr('attr2',result['estimate']);
				$('.cinco').text('5:'+result['cinco']);
				$('.quadro').text('4:'+result['quadro']);
				$('.tres').text('3:'+result['tres']);
				$('.dos').text('2:'+result['dos']);
				$('.uno').text('1:'+result['uno']);
				$('.is_left').text(result['summa']);
			}
			else{
				$('button').hide();
				$('#field-quest p').text('Заданий больше нет');
			}
		},
		error: function(){
			alert('error');
		}
	});
});
$('.blue-but').on('click',function(){
	var id = $('#field-quest').attr('attr1');
	var estimate = $('#field-quest').attr('attr2');
	$.ajax({
		type: 	'POST',
		url:	'blue.php',
		data:{
			id:id,
			estimate:estimate
		},
		success: function(data){
			
			var result = JSON.parse(data);
			if(result['is_end']!=1){
				$('#field-quest-p').text(result['question']);
				$('#numero').text(result['number']);
				$('.current-estimate').text(result['estimate']);
				$('#field-quest').attr('attr1',result['id']);
				$('#field-quest').attr('attr2',result['estimate']);
				$('.cinco').text('5:'+result['cinco']);
				$('.quadro').text('4:'+result['quadro']);
				$('.tres').text('3:'+result['tres']);
				$('.dos').text('2:'+result['dos']);
				$('.uno').text('1:'+result['uno']);
				$('.is_left').text(result['summa']);
			}
			else{
				$('button').hide();
				$('#field-quest p').text('Заданий больше нет');
			}
		},
		error: function(){
			alert('error');
		}
	});
});
