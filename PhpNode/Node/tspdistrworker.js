
var simplega = require('./lib/simplega.js'),
    tsp = require('./lib/tsp.js'),
    simplemessages = require('simplemessages');
        
var client = simplemessages.createClient(3005, 'localhost');

client.on('data', function(msg) {
    console.log(msg);
    if (msg.action == 'newproblem')
        newProblem(msg.width, msg.height);
    if (msg.action == 'stop')
        stopped = true;
});

var stopped = false;
var engine = new simplega.Engine();
var mutator = new tsp.Mutator();
engine.setMutators([mutator]);

function newProblem(width, height) {
    var points = tsp.createPointRectangle(width, height);
    var maxlength = width * height * (width*width + height*height);
    var bestresult = maxlength;
    population = tsp.createPopulation(5000, points, maxlength);
    stopped = false;
    
    function doStep() {
        engine.setPopulation(population);
        population = engine.nextPopulation();
        var bestvalue = simplega.getBestValue(population);
        var bestpath = maxlength - bestvalue;
        var l = population.length;
        console.log(l + ': ' + bestpath);
        
        if (bestpath < bestresult) {
            bestresult = bestpath;
            for (var k = 0; k < l; k++)
                if (population[k].evaluate() == bestvalue)
                    client.write( { action: 'newresult', value: bestpath, values: population[k].getValues() });        
        }
                
        if (!stopped)
            setImmediate(doStep);
    }
    
    setImmediate(doStep);
}

