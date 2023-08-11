$(".heading").html("changed")
$("#heading_id").html("Id ").css('backgroundColor','#000')
$("#heading_id").html("Id ").css('color','#fff')
$('.click').on('click',()=>{
$('.heading').html("hello")
})
$('.click').on('click',function(){
    $('#heading_id').html("File Changed")
})