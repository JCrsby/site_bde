// IMPORTS
const express = require('express');
const db = require('./models/index');
const router = require('./routing/router');

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

//CALL ROUTER FOR EVERY /API/ ROADS
api.use('/api/', router);

// LISTENING ON PORT 3000
api.listen(3000, () => {
    console.log('Example app listening on port 3000!')
});
