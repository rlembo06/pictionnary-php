var sizes = [8, 20, 44, 90];
var size, color, selectSize;
var x0, y0;
var drawingCommands = [];

var setColor = function () {
    color = document.getElementById('color').value;
    console.log("color:" + color);
};

var setSize = function () {
    selectSize = document.getElementById('size').value;
    console.log("selectSize:" + selectSize);
    
    switch (selectSize) {
        case '0':
            size = sizes[0];
            break;
        case '1':
            size = sizes[1];
            break;
        case '2':
            size = sizes[2];
            break;
        case '3':
            size = sizes[3];
            break;
    }
    
    console.log("size:" + size);
};

window.onload = function () {
    var canvas = document.getElementById('canvas');
    canvas.width = 400;
    canvas.height = 400;
    var context = canvas.getContext('2d');

    setSize();
    setColor();
    document.getElementById('size').onchange = setSize;
    document.getElementById('color').onchange = setColor;

    var isDrawing = false;

    var startDrawing = function (e) {
        console.log("start");
        
        var command = {"command":"start",'x0': x0, 'y0':y0, 'color':color};
        drawingCommands.push(command);

        isDrawing = true;
    };

    var stopDrawing = function (e) {
        console.log("stop");
        isDrawing = false;
    };

    var draw = function (e) {
        if (isDrawing) {
            context.strokeStyle = color;
            context.lineWidth = size;

            context.beginPath();
            context.moveTo(x0, y0);
            context.lineTo(e.offsetX, e.offsetY);
            context.stroke();

            [x0, y0] = [e.offsetX, e.offsetY];
        } 
        else return;
    }

    canvas.onmousedown = startDrawing;
    canvas.onmouseout = stopDrawing;
    canvas.onmouseup = stopDrawing;
    canvas.onmousemove = draw;

    document.getElementById('restart').onclick = function () {
        console.log("clear");
        context.clearRect(0, 0, canvas.width, canvas.height);  
    };
   
    $('#tools').submit(function( event ) {
        
        var commandes = JSON.stringify($('#drawingCommands').val());
        var draw = canvas.toDataURL();
        var id_user = $('#id_user').val();
        
        var drawing = new Drawing(commandes, draw, id_user);
        var drawing_json = JSON.stringify(drawing);
        
        var postDraw = $.post('traitements/req_paint.php', {drawing: drawing_json});
        postDraw.done(function(data) {
            alert('Dessin enregistré !');
        });
                
        event.preventDefault();
    });
};

var Drawing = function(_commandes, _draw, _id_user)
{
    this.commandes = _commandes;
    this.draw = _draw;
    this.id_user = _id_user;
};