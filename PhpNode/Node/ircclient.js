
var irc = require('irc');

var server = process.argv[2];
var channel = process.argv[3];
var botname = process.argv[4];

var bot = new irc.Client(server, botname,{ channels: [ channel ] });

bot.addListener('join', function(channel, who) {
    console.log('join', channel, who);
});

bot.addListener('message', function(from, to, text, message) {
    if (from)
        console.log('from', from);
    if (to)
        console.log('to', to);
    if (text)
        console.log('text', text);
    if (message)
        console.log('message', message);
});

