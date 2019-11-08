const express = require('express');
const db = require('./models/index');
const api = express();


db.sequelize.authenticate()
    .then(() => {
        console.log('Connection has been established successfully.');
    })
    .catch(err => {
        console.error('Unable to connect to the database:', err);
    });


api.listen(3000, function () {
    console.log('Example app listening on port 3000!')
});
