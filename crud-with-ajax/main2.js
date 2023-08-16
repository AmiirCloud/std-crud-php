loadData()
$(".add").on('click',()=>{
$('#addNew').show()
})
$(".close").on('click',()=>{
    $('#addNew').hide()
})

let btnAction = 'insert'
$('#registerForm').submit(function(event){
    event.preventDefault()
    let formData  = new FormData($('#registerForm')[0]);
    if(btnAction == 'insert'){

        formData.append('action','register');
    }else{
        formData.append('action','update')
    }
    
   $.ajax({
    method:'POST',
    dataType:'JSON',
    url:'./api.php',
    data:formData,
    processData:false,
    contentType:false,
    success:function(data){
        alert(data.data)
        loadData()
        $('#addNew').hide()

    },
    error:function(data){
        console.log(data)

    }
   })
  $('#registerForm')[0].reset()
})


function loadData(){
    $('#myTable tbody').html('')
    // $('#addNew').hide()

    let sendingData  = {
        action:'readAllStd'
    }
    $.ajax({
        method:'POST',
        dataType:'JSON',
        url:'./api.php',
        data:sendingData,
        success:(data)=>{
         let allData  = data.data
         allData.forEach((item)=>{
             tr = "<tr>"
            for(i in item){
                tr += `<td>${item[i]} </td>`
            }
            link  =  `index.php?id=${item.std_id}`
       
            tr+=
             ` <td>
            <a class = "btn btn-primary update" update_info=${item['std_id']}>Update</a>
            </td> `
            tr+=
             ` <td>
            <a class = "btn btn-danger delete" delete_info=${item['std_id']}>Delete</a>
            </td> `
            $("#myTable").append(tr)
            // loadData()
            // console.log("row ",tr)
         })
      
        },
        error:(error)=>{
            console.log(error)
        }
    })
}


function loadOne(id){
    let sendingData  = {
        action:'fetchOneStudentInfo',
        id:id
    }
    $.ajax({
        method:'POST',
        dataType:'JSON',
        url:'./api.php',
        data:sendingData,
        success:(data)=>{
        
                $('#addNew').show()
                $('#name').val(data.data[0].std_name)
                $('#class').val(data.data[0].std_class)
                $('#phone').val(data.data[0].std_phone)
                $('#address').val(data.data[0].std_address)
                // console.log("phone",data.data[0].std_name)
                
                let  ui  = `   <input type='hidden'id = 'id' name  = 'id' class='form-control hidden'  value=${data.data[0].std_id}> ` 
                $('#registerForm').append(ui)
                btnAction = 'update'
             

                loadData()
                

                
      
        },
        error:(error)=>{
            console.log(error)
        }
    })
}

function deleteStd(id){
    let sendingData  = {
        action:'delete',
        id:id
    }
    $.ajax({
        method:'POST',
        dataType:'JSON',
        url:'./api.php',
        data:sendingData,
        success:(data)=>{
               loadData()
               alert(data.data)
                

                
      
        },
        error:(error)=>{
            console.log(error)
        }
    })
}
$('#myTable').on('click','a.update',function(){
    let id  = $(this).attr('update_info');
   loadOne(id)
})
$('#myTable').on('click','a.delete',function(){
    let id  = $(this).attr('delete_info');
   deleteStd(id)
})
// loadOne()

