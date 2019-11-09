const express = require('express');
const database = require('../database/database');
const modelPersonne = require('../model/personne');
const seuelize = require('sequelize');



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
        var password = req.body.password;

        if (mail === null || username === null || password === null) {
            res.status(400).json({'err': 'empty param'});
        }
        else {
            modelPersonne.findOne({
                attributes: ['mail'],
                where: {mail: mail,
                        Mot_De_Passe: password
                }
            }).then( (userFound) => {
                return res.json(userFound);
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
