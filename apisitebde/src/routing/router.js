// Import
const express = require('express');
const userController = require('../Controllers/userController');

// router declaration
const router = express.Router();


// ROUTES url : localhost:8080/api/#
router.route('/test').get((req, res) => {res.send('hello')});


//------------------------------- USER REQUESTS
/*router.route('/user/register')
    .post((req, res) => {
        userController.register(req, res)
    })
    .get((req, res)=>{
        userController.register(req, res)
    });*/

router.post('/user/findOne', (req, res) => {
    userController.findOne(req, res)});


router.route('/user/login')
    .post((req, res)=>{
        userController.login(req, res)
    })
    .get((req, res)=>{
        userController.login(req, res)
    });

router.route('/user/delete')
    .post((req, res)=>{
        userController.deleteUser(req, res)
    })
    .get((req, res)=>{
        userController.deleteUser(req, res)
    });
//-------------------------------END USER REQUESTS



module.exports = router;
