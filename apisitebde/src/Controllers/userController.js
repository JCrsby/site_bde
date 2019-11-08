const express = require('express');
const sequelize = require('sequelize');
const model = require('../model/personne');



//register method
exports.register = (req, res) => {
    res.send('registered');
};

exports.allUsers = (req, res) => {
    Personne().findAll().then(users => {
        console.log("All users:", JSON.stringify(users, null, 4));
    });
};


module.exports = {
    findOne: (req, res) => {
        var mail = req.body.email;
        var username = req.body.username;

        if (mail === null || username === null) {
            res.status(400).json({'err': 'empty param'});
        }
        else {
            model.findOne({
                attributes: ['mail'],
                where: {mail: mail}
            }).then(function (userFound) {
                return res.status(200).json({'it': 'work'});
            }).catch(function (err) {

                return res.status(500).json({'err': 'unable to verify'});
            })
        }

    }
};



// login method
exports.login = (req, res) => {
    res.send('login successful');
};

//delete user method
exports.deleteUser = (res, req) => {
    res.send('deleted');
};
