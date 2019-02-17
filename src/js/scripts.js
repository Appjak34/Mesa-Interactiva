
$(document).ready(function () {

    var listPhones = $('.listImg .slide > li'),
        canvasAreaOne = $('#canvasAreaOne'),
        canvasAreaTwo = $('#canvasAreaTwo'),
        imgAreaPhoneOne = $('#imgPhoneOne'),
        imgAreaPhoneTwo = $('#imgPhoneTwo');


    new MesaInteractiva(listPhones, canvasAreaOne, canvasAreaTwo, imgAreaPhoneOne, imgAreaPhoneTwo);


});