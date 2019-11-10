// IMPORTS
const express = require('express');
const db = require('./models/index');
const router = require('./routes/router');
const bodyParser = require('body-parser');

// GENERATE SERVER API
const api = express();

// BDD CONNEXION CHECK
db.sequelize.authenticate()
    .then(() => {
        console.log('Connection has been established successfully.');
    })
    .catch(err => {
        console.error('Unable to connect to the database:', err);
    });

//add body parse extensions
// parse application/x-www-form-urlencoded
api.use(bodyParser.urlencoded({ extended: false }));

// parse application/json
api.use(bodyParser.json());


//CALL ROUTER FOR EVERY /API/ ROADS
api.use('/api/', router);

// LISTENING ON PORT 3000
api.listen(3000, () => {
    console.log('Example app listening on port 3000! this is the src')
});
