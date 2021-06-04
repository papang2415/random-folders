require('./employee.model');
const mongoose = require('mongoose');

const url = "mongodb://papang:joshua2415@cluster0-shard-00-00.ttqbx.mongodb.net:27017,cluster0-shard-00-01.ttqbx.mongodb.net:27017,cluster0-shard-00-02.ttqbx.mongodb.net:27017/EmployeeDB?ssl=true&replicaSet=atlas-shf6hh-shard-0&authSource=admin&retryWrites=true&w=majority";

mongoose.connect(url,{useNewUrlParser:true},(err) => {
    if(!err){ console.log("MongoDB Connection Succeeded");}
    else{
        console.log("An Error Occured");
    } 
})

require('./employee.model');