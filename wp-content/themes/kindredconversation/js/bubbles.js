/* DOTS SETTINGS */
                                    
var canvas = document.getElementById('stage');
var winWidth = canvas.offsetWidth;
var winHeight = canvas.offsetHeight;     
canvas.height = winHeight;
canvas.width = winWidth;

var context = canvas.getContext('2d');
var canvasWidth = canvas.offsetWidth;
var canvasHeight = canvas.offsetHeight;
var dots = [];
var amount =  9;
var colors = ['#C7E3E2'];
var curX;
var curY;

/* DOTS PROTOTYPE */

function Dot(){}

Dot.prototype.create = function(){
  	this.radius = Math.floor((Math.random() * 200) + 3);
  	this.originalSize = this.radius;
  	this.x = Math.floor((Math.random() * canvasWidth) + 1);
  	this.y = Math.floor((Math.random() * canvasHeight) + 1);
  	this.speed = (Math.random()*0.9);
  	this.vx = (Math.random() * this.speed) - this.speed;
  	this.vy = (Math.random() * this.speed) - this.speed;
  	this.color = colors[(Math.floor((Math.random() * colors.length)))];
  	this.alpha = Math.random()+0.2;
  	this.expanded = false;
};

Dot.prototype.animate = function(){
  this.move();
  this.expand();
  this.draw();
};


Dot.prototype.draw = function(){
  context.beginPath();
  context.globalAlpha = this.alpha;
  context.fillStyle = this.color;
  context.arc(this.x, this.y, this.radius, 0, 2 * Math.PI, false);
  context.fill();
};

Dot.prototype.move = function(){

  this.x += this.vx*this.speed;
  this.y += this.vy*this.speed;

  // bounce on width
  if(this.x >= canvasWidth){
    this.vx = -this.speed;
  }else if(this.x < 0){
    this.vx = this.speed;
  }else{
    this.vx *= 1 ;
  }


  // bounce on height
  if(this.y >= canvasHeight){
    this.vy = -this.speed;
  }else if(this.y < 0){
    this.vy = this.speed;
  }else{
    this.vy *= 1 ;
  }

};

Dot.prototype.expand = function(){
   if(this.x <= (curX + 100) && this.x >= (curX - 100) && this.y <= (curY + 100) && this.y >= (curY - 100) ){
     if(this.radius >= this.originalSize * 3) return false;
     this.radius *= 1.02;
     this.expanded = true;
   }else if(this.expanded){
     this.radius *= 0.98;
     this.expanded = this.radius <= this.originalSize ? false: true;
   }
};


/* RENDERING THE CANVAS */

function spawn(){
  for(var i =0; i <= amount; i++){
    var dot  = new Dot;
    dot.create();
    dots.push(dot);
  }
}

function draw(){
  for(var i =0; i < dots.length; i++){
    dots[i].animate();
  }
}

/* KICK IT OFF */

spawn(--amount);

function render() {
  	context.clearRect(0, 0, canvasWidth, canvasHeight);
  	draw();
  	requestAnimationFrame(render);
}

render();
