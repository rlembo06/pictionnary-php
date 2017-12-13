//https://www.kirupa.com/html5/drawing_triangles_on_the_canvas.htm
//https://jsfiddle.net/cranes/kp74m47d/
//http://www.williammalone.com/articles/create-html5-canvas-javascript-drawing-app/

$(document).ready(function(){
    $('.drawings').click(function() {
        
        var id = $(this).attr('id');
        
        var getDrawing = $.get('traitements/req_getDraw.php', {id: id});
        getDrawing.done(function(data) {
            
            var json = JSON.parse(data);
            var drawing = new Drawing(json.commandes, json.draw, json.id_user);
            console.log(drawing);
            
            var canvas =$('#reDrawing')[0];
            var ctx = canvas.getContext('2d');

    
            var i = 0;
            var listCommandes = JSON.parse(drawing.commandes);
            console.log(listCommandes);
            
            listCommandes.forEach(function(c) {
                i++
                if(i > 1)
                {
                    ctx.strokeStyle = c.color;
                    console.log(c.x0, c.y0);
                    
                    ctx.beginPath();
                    ctx.moveTo(c.x0, c.y0);
                    ctx.lineTo(c.x0, c.y0);
                    [c.x0, c.x0] = [c.offsetX, c.offsetY];
                    ctx.closePath();
                    ctx.stroke();
                }
            });
        });

    });
    
    
    /*
    var canvas = document.getElementById('reDrawing');
    if (canvas.getContext) {
      var ctx = canvas.getContext('2d');

      ctx.beginPath();
      ctx.arc(75, 75, 50, 0, Math.PI * 2, true);  // Cercle extérieur
      ctx.moveTo(110,75);
      ctx.arc(75, 75, 35, 0, Math.PI, false);  // Bouche (sens horaire)
      ctx.moveTo(65, 65);
      ctx.arc(60, 65, 5, 0, Math.PI * 2, true);  // Oeil gauche
      ctx.moveTo(95, 65);
      ctx.arc(90, 65, 5, 0, Math.PI * 2, true);  // Oeil droite
      ctx.stroke();
    }
    */
});

var Drawing = function(_commandes, _draw, _id_user)
{
    this.commandes = _commandes;
    this.draw = _draw;
    this.id_user = _id_user;
};