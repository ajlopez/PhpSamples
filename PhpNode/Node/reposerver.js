var dnode = require('dnode'),
    repository = require('./lib/repository');
    
var customers = repository.createRepository('customers');
    
dnode({
    findAll: function (data, callback) {
        console.log('data', data);
        console.log('callback', callback);
        var list = customers.findAll();
        console.dir(list);
        callback(null, list);
    },
    add: function (data, callback) {
        console.log('data');
        console.dir(data);
        console.log('callback', callback);
        var id = customers.add(data);
        console.log('result', id);
        callback(null, id);
    }
}).listen(3002);

console.log("Listening 3002");