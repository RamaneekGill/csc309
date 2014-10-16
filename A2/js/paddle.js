function Paddle(ctx, x, y, width, height, ball) {
  this.ctx    = ctx;
  this.x      = x;
  this.y      = y;
  this.width  = width;
  this.height = height;
  this.ball   = ball;
}

Paddle.prototype.reset = function() {
  this.x = canvas.width / 2 - (this.width / 2);
}


Paddle.prototype.draw = function() {
  this.ctx.fillStyle = "#fff";
  this.ctx.fillRect(this.x, this.y, this.width, this.height);
}

Paddle.prototype.move = function(amount) {
  // Take into consideration the window boundaries
  if (this.x + amount <= 0) {
    this.x = 0;
  } else if (this.x + amount >= window.innerWidth - this.width) {
    this.x = window.innerWidth - this.width;
  } else {
    this.x += amount;
  }
}
