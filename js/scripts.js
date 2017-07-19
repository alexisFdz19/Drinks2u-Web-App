var inicio=function () {
	$(".cantidad").change(function(e){
		var actual =this;
		if($(this).val()!=''){
			
				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();
				var subtotal=precio*cantidad;
				//parent().parent().closest('.subtotal').text('Subtotal: '+(precio*cantidad));
				$(actual).parent().parent().find('.subtotal').text('Subtotal: '+(precio*cantidad));
				$.post('process/modificarDatos.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
						$("#total").text('Total: '+e);
				});
			
		}
	});
}
$(document).on('ready',inicio);