// INCLUDE
const express = require('express');
const userController = require('../Controller/userController');

//ROUTER
const router = express.Router();

//USERS ROUTES
router.post('/user/register', (req, res)=> {userController.register(req, res)});
router.post('/user/login', (req, res)=>{userController.login(req,res)});
router.post('/user/delete', (req, res)=>{userController.deleteUser(req, res)});
router.post('/user/addRole', (req,res)=>{userController.addRole(req, res)});


//EXPERIMENTAL ROUTES
router.post('/user/add', (req, res)=>{userController.addUser(req, res)});



//EXPORT ROUTER
module.exports = router;
