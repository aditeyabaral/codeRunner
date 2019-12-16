
 $(document).ready(function(){

    $("#form-log").val({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            username: {
                required: "specify email"
            },
            password: {
                required: "specify password"
            }
        }
    });

});