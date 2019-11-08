//Import
const express = require('express');
const bodyParser = require('body-parser');
const sequelize = require('sequelize');
//const router = require('./routing/router');
const database = require('./database/database');

/// server declaration///
const app = express();


//testing db connexion
database
    .authenticate()
    .then(() => {
        console.log('Connection has been established successfully.');
    })
    .catch(err => {
        console.error('Unable to connect to the database:', err);
    });

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }));

// parse application/json
app.use(bodyParser.json());


// call router
//app.use('/api/', router);
app.use('/api/', require('./routing/router'));

app.listen(8080, ()=> {console.log('listning on port 8080')});
