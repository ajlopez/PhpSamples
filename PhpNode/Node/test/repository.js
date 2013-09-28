
var repository = require('../lib/repository');

exports['create repository'] = function (test) {
    var repo = repository.createRepository('people');
    
    test.ok(repo);
    test.equal(repo.name(), 'people');
};

exports['add item'] = function (test) {
    var repo = repository.createRepository('people');
    var adam = { name: 'Adam', age: 800 };
    
    var result = repo.add(adam);
    
    test.equal(result, 1);
};

exports['find all'] = function (test) {
    var repo = repository.createRepository('people');
    var adam = { name: 'Adam', age: 800 };    
    var eve = { name: 'Eve', age: 700 };
    repo.add(adam);
    repo.add(eve);
    
    var result = repo.findAll();
    
    test.ok(result);
    test.ok(Array.isArray(result));
    test.equal(result.length, 2);
    test.equal(result[0].id, 1);
    test.equal(result[1].id, 2);
    test.equal(result[0].name, 'Adam');
    test.equal(result[0].age, 800);
    test.equal(result[1].name, 'Eve');
    test.equal(result[1].age, 700);
};exports['find unknown by id'] = function (test) {    var repo = repository.createRepository('people');    var result = repo.findById(1);        test.equal(result, null);};exports['find by id'] = function (test) {    var repo = repository.createRepository('people');    var adam = { name: 'Adam', age: 800 };        var eve = { name: 'Eve', age: 700 };    var abel = { name: 'Abel', age: 500 };    repo.add(adam);    repo.add(eve);    repo.add(abel);        var result = repo.findById(2);        test.ok(result);    test.equal(result.id, 2);    test.equal(result.name, 'Eve');    test.equal(result.age, 700);};