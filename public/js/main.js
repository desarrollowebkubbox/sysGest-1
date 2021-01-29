$(document).ready(function(){
    $(document).on('click', '.deleteTaskClass', function deleteThis(){
        id = $(this).attr('task-id');
         taskDelDOM = $(this).parent().parent();
        $.ajax({
            type: 'DELETE',
            url: window.location.origin+'/deleteTask/'+id,
            dataType: "JSON",
            data: {_token:$('meta[name="csrf-token"]').attr('content'),id:id},
                beforeSend: function (xhr) { // Add this line
                    xhr.setRequestHeader('X-CSRF-Token',$('meta[name="csrf-token"]').attr('content'));
             },  // Add this line
            success: function(){
                $(taskDelDOM).remove();
            }, error: function(response){
            console.log(response);
            
            }
        })


    });

    $('#goBackTask').click(function(){
        $('#addNewTask').addClass('d-none');
        $('#tasks').removeClass('d-none');
        $('#tasks').removeClass('d-none');
    });

    $('#registerFirstTask').click(function(){
        $('#taskNone').removeClass('d-flex');
        $('#taskNone').addClass('d-none');
        $('#addNewTask').removeClass('d-none');
    });

    $(document).on('click', '#registerTask', function deleteThis(){
        nameCreate = $('#nameCreate').val();
        descriptionCreate = $('#descriptionCreate').val();
        stateCreate = $('#stateCreate').val();

         taskDelDOM = $(this).parent().parent();
        $.ajax({
            type: 'POST',
            url: window.location.origin+'/createTask/',
            dataType: "JSON",
            data: {_token:$('meta[name="csrf-token"]').attr('content')},
                beforeSend: function (xhr) { // Add this line
                    xhr.setRequestHeader('X-CSRF-Token',$('meta[name="csrf-token"]').attr('content'));
             },  // Add this line
            success: function(response){
                alert('true');
            }, error: function(response){
            console.log(response);
            
            }
        })


    });

});