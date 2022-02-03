"use strict";

$(document).ready(function () {

    $('#frmRegister').submit(function (e) {
        e.preventDefault();
        let fullname = $("#fullname").val();
        let fpPayload = {
            'Timeout': 10000,
            'Quality': 50,
            'templateFormat': "ISO",
            'imageWSQRate': 0.75,
        };

        captureFp(fullname, fpPayload);
    })

    function captureFp(fullname, fpData) {

        $.ajax({
            url: 'https://localhost:8443/SGIFPCapture',
            type: 'POST',
            dataType: 'json',
            data: fpData,
            success: function (response, textStatus) {
                console.log(response);
                // $("#contFrmRegister").css('display', 'none');

                // let htmlData = "<img href";

                enrollFp(response, fullname);
            },
            fail: function (response, textStatus) {
                console.log(response);
            }
        });
    }

    function enrollFp(response, fullname) {

        $.ajax({
            url: base_url + "/register",
            type: 'POST',
            data: {
                fpData: response,
                fullname: fullname,
            },
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
            success: function (response, textStatus) {
                // console.log(response);
                let respJson = JSON.parse(response);
                console.log(response);
            },
            fail: function (response, textStatus) {
                console.log(response);
            }
        });
    }



})