require('./models/db');
// require('dotenv').config();

const express = require('express');
const path = require('path');
const exphbs = require('express-handlebars');




const employeeController = require('./controllers/employeeController');

var app = express();

// const uri = process.env.ATLAS_URI;
// mongoose.connect(uri, {
//     useNewUrlParser: true,
//     useCreateIndex: true,
//     useUnifiedTopology: true
// });

app.set('views', path.join(__dirname, '/views/'));
app.engine('hbs', exphbs({ extname: 'hbs', defaultLayout: 'mainLayout', layoutsDir: __dirname + '/views/layouts/'}));
app.set('view engine', 'hbs');

app.listen(3000, () => {
    console.log('Express server started at port : 3000');
});

app.use('/employee', employeeController);