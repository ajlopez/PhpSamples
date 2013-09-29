var socketio = require('socket.io');

var io = socketio.listen(3004);

io.sockets.on('connection', function (socket) {
  socket.on('sendMessage', function (msg) {
    socket.broadcast.emit('newMessage', msg);
	console.log('Sending message', msg);
  });

  socket.on('disconnect', function () {
    console.log('user disconnected');
  });
});

