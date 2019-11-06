//Import
const express = require('express');
const router = require('./routing/router');

/// server declaration///
const app = express();//
///////////////////////

app.use('/api/', router);


app.listen(8080, ()=> {console.log('listning on port 8080')});
