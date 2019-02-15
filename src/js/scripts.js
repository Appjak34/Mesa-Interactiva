function drawImg() {
    var x = document.getElementById('canvasAreaOne');
    var canvax = x.getContext('2d');	//getContext untuk mendeklarasikan dimensi canvas yang kita buat di var x
    var imgElement = document.getElementById('imgPhoneOne');
    var imgObj = new Image();
    imgObj.src = imgElement.src;

    var imgW = imgObj.width;
    var imgH = imgObj.height;
    var imgX = (canvax.canvas.width * .5) - (imgW * .5);
    var imgY = (canvax.canvas.height * .5) - (imgH * .5);

    //ev.setData("imgWidth", canvax.imgW);

    imgObj.onload = function () {			//load image on canvas
        canvax.clearRect(imgX, imgY, imgW, imgH);			//bersihkan canvas dari gambar sebelumnya
        canvax.drawImage(imgObj, imgX, imgY, imgW, imgH);	//place image on canvas in x & y coordinat = 10
    };

}

function drawImg2() {
    var y = document.getElementById('canvasAreaTwo');
    var canvay = y.getContext('2d');	//getContext untuk mendeklarasikan dimensi canvas yang kita buat di var x
    var imgElementY = document.getElementById('imgPhoneTwo');
    var imgObj2 = new Image();
    imgObj2.src = imgElementY.src;

    var imgW = imgObj2.width;
    var imgH = imgObj2.height;
    var imgX = (canvay.canvas.width * .5) - (imgW * .5);
    var imgY = (canvay.canvas.height * .5) - (imgH * .5);


    imgObj2.onload = function () {			//load image on canvas
        canvay.clearRect(imgX, imgY, imgW, imgH);			//bersihkan canvas dari gambar sebelumnya
        canvay.drawImage(imgObj2, imgX, imgY, imgW, imgH);	//place image on canvas in x & y coordinat = 10
    };

}

function siemaFunction(){
    new Siema({
            selector: '.siema',
            duration: 200,
            easing: 'ease-out',
            perPage: 1,
            startIndex: 0,
            draggable: true,
            multipleDrag: true,
            threshold: 100,
            loop: true,
            rtl: false,
        }
    );
}
function detectImageOnDropArea(phoneName){

    switch(phoneName){ //querys database by name phone
        case "Galaxy s9":{
            //make somewhere 
            break;
        }
        case "Moto G7": {
            //make somewhere
            break;
        }
        case "Huawei P 20 lite": {
            //make somewhere
            break;
        }
        case "Huawei Nova 3": {
            //make somewhere
            break;
        }
        case "Iphone 6": {
            //make somewhere
            break;
        }
        case "Galaxy j2": {
            //make somewhere
            break;
        }
        default:{
            //other phones names
            break;
        }

    }
}

$(document).ready(function () {

    $('.siema li').draggable({
            containment: 'document',
            opacity: 0.60,
            revert: false,
            helper: 'clone',
            appendTo: $(".imageDest"),
            cursor: "move"
        }
    );
    

    $('#canvasAreaOne').droppable({
        hoverClass: 'borda', tolerance: 'pointer',
        drop: function (ev, ui) {
            var droppedItem = $(ui.draggable).clone();
            var canvasImg = $(this).find('img');
            var newSrc = droppedItem.find('img').attr('src');
            canvasImg.attr("src", newSrc);
            drawImg();

            var name = ui.draggable.find('p').text(); //get phone image text
            detectImageOnDropArea(name);
        }
    });

    $('#canvasAreaOne').dblclick(function () {
        $('#canvasAreaOne').draggable();

    });
    $('#canvasAreaTwo').droppable({
        hoverClass: 'borda', tolerance: 'pointer',
        drop: function (ev, ui) {
            var droppedItem = $(ui.draggable).clone();
            var canvasImg = $(this).find('img');
            var newSrc = droppedItem.find('img').attr('src');
            canvasImg.attr("src", newSrc);
            drawImg2();

            var namePhone = ui.draggable.find('p').text(); //get phone image text
            alert(namePhone);
        }
    });

    $('#canvasAreaTwo').dblclick(function () {
        $('#canvasAreaTwo').draggable();

    });

    /* execute caurusel funtion */
    siemaFunction();

    /*detect image on drop area */



});
