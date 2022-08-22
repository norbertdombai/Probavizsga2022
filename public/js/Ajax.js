class Ajax{
    constructor(token){this.token=token;}   

    getAjax(apivegpont, tomb, callback){   
        $.ajax({
            url: apivegpont, 
            type: "GET",
            dataType: 'json',
            success: function(result){
            tomb.splice(0,tomb.length);
            result.tomb.forEach(element => {tomb.push(element);
            });
            callback(tomb);
            }
        });
        console.log("GET OK");
    }

    postAjax(apivegpont, ujAdat){
        $.ajax({
            headers: {'X-CSRF-TOKEN': this.token},
            url: apivegpont, 
            type: "POST", 
            data:ujAdat,
            // error: function (data, textStatus, errorThrown) {
            //     console.log(data);
        
            // },
        });
    }

    deleteAjax(apivegpont, id){
        $.ajax({
            headers: {'X-CSRF-TOKEN': this.token},
            url: apivegpont+"/"+id, 
            type: "DELETE",
            error: function (data, textStatus, errorThrown) {
                console.log(data);
        
            },
        });
    }

    putAjax(apivegpont, id, ujAdat){
        $.ajax({
            headers: {'X-CSRF-TOKEN': this.token},
            url: apivegpont+"/"+id, 
            type: "PUT",
            data:ujAdat,
        });
    }

}
