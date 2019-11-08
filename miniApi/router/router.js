const express = require('express');
const router = express.Router();

router.get('/user/login', (req, res)=>{res.send('login method')});


module.exports = router;
