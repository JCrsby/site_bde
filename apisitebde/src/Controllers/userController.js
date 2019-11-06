const express = require('express');
const sequelize = require('sequelize');



//register method
exports.register = (req, res) => {
    res.send('registered')
};

// login method
exports.login = (req, res) => {
    res.send('login successful');
};

//delete user method
exports.deleteUser = (res, req) => {
    res.send('deleted');
};
