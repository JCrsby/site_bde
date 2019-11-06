// Import
const express = require('express');

// router declaration
const router = express.Router();

router.get('/test',(req, res) => {res.send('hello')});

module.exports = router;
