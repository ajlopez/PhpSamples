
function Repository(name) {
    var maxid = 0;
    var items = { };
    
    this.name = function () {
        return name;
    };
    
    this.add = function (item) {
        maxid++;
        item.id = maxid;
        items[maxid] = item;
        return maxid;
    }
    
    this.findAll = function () {
        var result = [];
        
        Object.keys(items).forEach(function (id) {
            result.push(items[id]);
        });
        
        return result;
    }
    
    this.findById = function (id) {
        if (!items[id])
            return null;
            
        return items[id];
    }
}

function createRepository(name) {
    return new Repository(name);
}

module.exports = {
    createRepository: createRepository
}