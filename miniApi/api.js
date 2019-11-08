// INCLUDE
const express = require('express');
const bodyParser = require('body-parser');
const router = require('./router/router');
// API DECLARATION
const api = express();

// parse application/x-www-form-urlencoded
api.use(bodyParser.urlencoded({ extended: false }));

// parse application/json
api.use(bodyParser.json());

api.use('/api/', router);


api.listen(3000, function () {
  console.log('miniapi listening on port 3000!')
})
