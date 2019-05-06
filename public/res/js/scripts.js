
function create(){

	var obj = {
		'nmAula':$("#nmAula").val(),
		'nmProfessor':$("#nmProfessor").val(),
		'dtAula':$("#dtAula").val(),
		'observacao':$("#observacao").val(),
		'total' : $("#total").val(),
		'corretas' : $("#corretas").val(),
		'naoRespondidas' : $("#naoRespondidas").val(),
		'disciplina' : $("#disciplina").val()
	}

	var json = JSON.stringify(obj);

	$.ajax({
		url:'../App/controller/controller.php',
		data:{'action':'create', 'param':json},
		success:function(data){
			console.log(data);
		}

	});
	
}


function listar(){
	$.ajax({
		url:'../App/controller/controller.php',
		data:{'action':'getAll'},
		success:function(data){
			console.log(data);
		}
	});
}


$("#bt_submit").click(function(){
	
	create();

});

$("#bt_listar").click(function(){

	listar();

});