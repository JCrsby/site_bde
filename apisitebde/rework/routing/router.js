// INCLUDE
const express = require('express');
const userController = require('../Controller/userController');

//ROUTER
const router = express.Router();

//USERS ROUTES
router.post('/user/register', (req, res)=> {userController.register(req, res)});
router.post('/user/login', (req, res)=>{userController.register(req,res)});
router.post('/user/delete', (req, res)=>{userController.Userdelete(req, res)});


module.exports = router;
