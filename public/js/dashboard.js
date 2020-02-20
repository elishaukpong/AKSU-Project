$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(()=>{
    $('.role-delete').click(function(e){
        e.preventDefault();
        deleteEntity(this);
    });

    $('.tag-delete').click(function(e){
        e.preventDefault();
        deleteEntity(this);
    });

    $('.roommate').click(function(){
        Swal.fire({
            icon: 'info',
            title: 'Coming Soon!',
            text: 'Hold Tight, this feature is coming soon!',
            showCancelButton: true,
            timer:3000
        });
    });

    function deleteEntity(thisObject) {
        let deleteUrl = $(thisObject).attr('href');

        Swal.fire({
            icon: 'info',
            title: 'Whollup...Delete?',
            text: 'Are you sure you want to take this action?',
            showCancelButton: true,
            confirmButtonText: 'Delete Anyway !',
            timer: 5000,
        }).then((result) => {
            $.ajax({
                url: deleteUrl,
                cache: false,
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json'
                },
                error: function(xhr ){
                    console.log("An error occured: " + xhr.status + " " + xhr.statusText);
                    console.log(xhr.responseJSON);
                },
                success: function(result){
                    location.reload();
                }});
        });
    }

});

