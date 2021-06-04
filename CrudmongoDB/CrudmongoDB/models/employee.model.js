const mongoose = require('mongoose');

var employeeSchema = new mongoose.Schema({
    fullname: {
        type: String
    },
    email: {
        type: String
    },
    moblie: {
        type: String
    },
    City: {
        type: String
    }
});

mongoose.model('Employee',employeeSchema);