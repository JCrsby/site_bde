// INCLUDE
const ajaxController = require( '../Controller/ajaxController');
const express = require('express');
const userController = require('../Controller/userController');
const eventController = require('../Controller/eventController');
const productController = require('../Controller/productController');
const photoController = require('../Controller/photoController');

//ROUTER
const router = express.Router();

//USERS ROUTES
router.post('/user/login',      (req,res)=>{userController.login(req,res)});
router.post('/user/delete',     (req,res)=>{userController.deleteUser(req, res)});
router.post('/user/addRole',    (req,res)=>{userController.addRole(req, res)});
router.post('/user/register',   (req,res)=>{userController.register(req, res)});
router.post('/user/userinfo',   (req,res)=>{userController.getUserProfile(req, res)});
router.post('/user/all/admin',  (req,res)=>{ajaxController.allUser(req, res)});

//EVENTS ROUTES
router.post('/event/all',           (req, res)=>{eventController.allEvent(req, res)});
router.post('/event/add',           (req, res)=>{eventController.addEvent(req,res)});
router.post('/event/admin',         (req, res)=>{ajaxController.allEvent(req, res)});
router.post('/event/oneevent',      (req, res)=>{eventController.oneEvent(req, res)});
router.post('/event/changestate',   (req, res)=>{eventController.changeInscription(req, res)});
router.post('/event/allplusplus',   (req, res)=>{eventController.allEventPlusPlus(req, res)});

//PRODUCTS ROUTES
router.post('/product/all',         (req, res)=>{productController.allProduct(req,res)});
router.post('/product/admin',       (req, res)=>{ajaxController.allProduct(req,res)});
router.post('/product/AscPrice',    (req, res)=>{productController.LowenToHigher(req, res)});
router.post('/product/DescPrice',   (req, res)=>{productController.HigerToLower(req, res)});
router.post('/product/add',         (req,res)=>{productController.addProduct(req, res)});
router.delete('/product/delete',    (req, res)=>{productController.deleteProduct(req, res)});


//COMMENTARY ROUTES
router.post('/commentary/addcomment', (req, res)=>{photoController.addComment(req,res)});


//EXPERIMENTAL ROUTES
router.post('/user/add', (req, res)=>{userController.addUser(req, res)});



//EXPORT ROUTER
module.exports = router;
