$(document).ready(function () {

    $('#sample').click(function () {
        alert("yahoo!");
    })


    // login
    $('#login').submit(function (l) {
        l.preventDefault()


        $.ajax({
            url: 'classes/Login.php?f=login',
            method: 'post',
            data: $(this).serialize(),

            success: function (resp) {
                if (resp) {
                    resp = JSON.parse(resp)
                    if (resp.status == 'success') {
                        alert(resp.stat);
                        alert("succes");
                    } else if (resp.status == "failed") {
                        alert("failed");
                    }
                }
            }

        })

    })

    //register

    $('#register').submit(function (r) {
        r.preventDefault()

        $.ajax({
            url: 'classes/Register.php?=register',
            method: 'post',
            data: $(this).serialize(),

            success: function (resp) {
                if (resp) {
                    resp = JSON.parse(resp)
                    if (resp.status == 'success') { alert("successfully registered"); } else if (resp.status['failed']) { alert("invalid"); }

                }


            }


        })




    })






















})