//Import
const express = require('express');
const bodyParser = require('body-parser');
const Sequelize = require('sequelize');
const router = require('./routing/router');


/// server declaration///
const app = express();

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({extended: false}));

// parse application/json
app.use(bodyParser.json());


app.use('/api/', router);

app.listen(8080, () => {
    console.log('listning on port 8080')
});
