$(function(){

	$('#submit').click(function(){
		
			var name=$('#name').val();
			var cardid=$('#cardid').val();
			$.ajax({
				type:'POST',
				url:'post.php',
				data:{
					'action':'post',
					'name':name,
					'cardid':cardid
				}
			});
	});
})