function detectImageOnDropArea(phoneName) {

    switch (phoneName) { //querys database by name phone
        case "Galaxy S9": {
            //make somewhere
            alert("hola soy el phone");
            break;
        }
        case "Moto G7": {
            //make somewhere
            alert("hola soy el phone");
            break;
        }
        case "Huawei P20 Lite": {
            //make somewhere
            alert("hola soy el phone");
            break;
        }
        case "Huawei Nova 3": {
            alert("hola soy el phone");
            break;
        }
        case "Iphone 6": {
            //make somewhere
            alert("hola soy el phone");
            break;
        }
        case "Galaxy J2": {
            //make somewhere
            alert("hola soy el phone");
            break;
        }
        case "Xiaomy Note5": {
            alert("hola soy el phone");
            break;
        }
        case "Iphone X": {
            alert("hola soy el phone");
            break;
        }
        case "Iphone X": {
            alert("hola soy el phone");
            break;
        }
        case "Xperia L2": {
            alert("hola soy el phone");
            break;
        }
        default: {
            //other phones names
            break;
        }

    }
}
$(document).ready(function () {

    var listPhones = $('.listImg .slide > li'),
        canvasAreaOne = $('#canvasAreaOne'),
        canvasAreaTwo = $('#canvasAreaTwo'),
        imgAreaPhoneOne = $('#imgPhoneOne'),
        imgAreaPhoneTwo = $('#imgPhoneTwo')


    new MesaInteractiva(listPhones, canvasAreaOne, canvasAreaTwo, imgAreaPhoneOne, imgAreaPhoneTwo)


});
