$(document).ready(function () {

    let patternName = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
    let patternEmail = /^[\w\-\.]+@([\w\-]+\.)+[\w]{2,4}$/;
    let patternPasswordSize = /^.{6,15}$/;
    let patternPasswordUper = /[A-Z]/;
    let patternPasswordLower = /[a-z]/;
    let patternPasswordInt = /\d/

    $("#btn").on("click", function (e) {

        let toSubmit = true;

        if (!$("#firstname").val().match(patternName)) {
            toSubmit = false;
            $("#spanfirstname")[0].innerHTML = " Please add a valid firstname like Naruto (Not Xx_Dark_Sasuke_xX)";
        } else {
            $("#spanfirstname")[0].innerHTML = "";
        }

        if (!$("#name").val().match(patternName)) {
            toSubmit = false;
            $("#spanName")[0].innerHTML = " Please add a valid name like Uzumaki";
        } else {
            $("#spanName")[0].innerHTML = "";
        }

        if (!$("#email").val().match(patternEmail)) {
            toSubmit = false;
            $("#spanEmail")[0].innerHTML = " Please add an email valid example : hedilannoo@gmail.com (HIRE HIM !)";

        } else {
            $("#spanEmail")[0].innerHTML = "";
        }

        if (!$("#password").val().match(patternPasswordSize) || !$("#password").val().match(patternPasswordUper) || !$("#password").val().match(patternPasswordLower) || !$("#password").val().match(patternPasswordInt)) {
            toSubmit = false;
            $("#spanPassword")[0].innerHTML = " Please add a valid Password (between 6 and 15 characters with one uper and one lower and one digit)";
        } else {
            $("#spanEmail")[0].innerHTML = "";
        }

        if (!toSubmit) {
            e.preventDefault();
            e.stopPropagation();
        }
    });

});
