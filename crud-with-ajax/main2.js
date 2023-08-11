$(".add").on('click',()=>{
$('#addNew').show()
})
$(".close").on('click',()=>{
    $('#addNew').hide()
})

$('#registerForm').submit(function(event){
    event.preventDefault()
    let formData  = new FormData($('#registerForm')[0]);
    formData.append('action','register');
    
   $.ajax({
    method:'POST',
    dataType:'JSON',
    url:'./api.php',
    data:formData,
    processData:false,
    contentType:false,
    success:function(data){
        alert(data.data)
    },
    error:function(data){
        console.log(data)

    }
   })
  $('#registerForm')[0].reset()
})