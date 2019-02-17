class MesaInteractiva {

    constructor(listPhones, canvasAreaOne, canvasAreaTwo, imgAreaPhoneOne, imgAreaPhoneTwo) {
        this._listPhones = listPhones

        this.initDraggable()
        this.initDroppableArea(canvasAreaOne, imgAreaPhoneOne)
        this.initDroppableArea(canvasAreaTwo, imgAreaPhoneTwo)
    }

    initDraggable() {
        this._listPhones.draggable({
            containment: 'document',
            opacity: 0.60,
            revert: false,
            helper: 'clone',
            cursor: "move"
        });

    }


    drawImg(canvasArea, imgAreaPhone) {


        var canvax = canvasArea[0].getContext('2d');
        var imgObj = new Image();

        imgObj.src = imgAreaPhone[0].src;

        var imgW = imgObj.width;
        var imgH = imgObj.height;
        var imgX = (canvax.canvas.width * .5) - (imgW * .5);
        var imgY = (canvax.canvas.height * .5) - (imgH * .5);

        imgObj.onload = function () {
            canvax.clearRect(imgX, imgY, imgW, imgH);
            canvax.drawImage(imgObj, imgX, imgY, imgW, imgH);
        };

    }

    initDroppableArea(canvasArea, imgPhone) {

        let self = this;

        canvasArea.droppable({
            hoverClass: 'borda',
            tolerance: 'pointer',
            drop: function (ev, ui) {
                var droppedItem = $(ui.draggable).clone();
                var canvasImg = $(this).find('img');
                var newSrc = droppedItem.find('img').attr('src');
                canvasImg.attr("src", newSrc);
                self.drawImg(canvasArea, imgPhone)

                self.initPhoneData(droppedItem.find('img'), canvasArea.attr('id'))

                //var name = ui.draggable.find('p').text();
                //detectImageOnDropArea(name);
            }
        });

        canvasArea.dblclick(() => {
            canvasArea.draggable();

        });

    }

    initPhoneData(phoneData, selectedCanvasArea) {

        let phone = new Telefono(phoneData.attr('src'),
            phoneData.attr('data-name'),
            phoneData.attr('data-price'),
            phoneData.attr('data-company'),
            phoneData.attr('data-model'),
            phoneData.attr('data-description'),
            phoneData.attr('data-color'))

        if (selectedCanvasArea === 'canvasAreaOne') {
            $('.content-phone-one').addClass('phone-selected')
            $('.content-phone-one .nombre').text(phone._name);
            $('.content-phone-one .precio').text('$' + phone._price);
            $('.content-phone-one .marca').text(phone._company);
            $('.content-phone-one .modelo').text(phone._model);
            $('.content-phone-one .descripcion').text(phone._description);
            $('.content-phone-one .color').text(phone._color);
        }
        if (selectedCanvasArea === 'canvasAreaTwo') {
            $('.content-phone-two').addClass('phone-selected');
            $('.content-phone-two .nombre').text(phone._name);
            $('.content-phone-two .precio').text('$' + phone._price);
            $('.content-phone-two .marca').text(phone._company);
            $('.content-phone-two .modelo').text(phone._model);
            $('.content-phone-two .descripcion').text(phone._description);
            $('.content-phone-two .color').text(phone._color);
        }

    }

}