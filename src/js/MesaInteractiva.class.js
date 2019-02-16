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

        var x = canvasArea[0];
        var canvax = x.getContext('2d');
        var imgElement = imgAreaPhone[0];
        var imgObj = new Image();
        imgObj.src = imgElement.src;

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

                var name = ui.draggable.find('p').text();
                detectImageOnDropArea(name);
            }
        });

        canvasArea.dblclick(() => {
            canvasArea.draggable();

        });

    }

}