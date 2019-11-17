"use strict";

// THIS IS THE EVENT CONTROLLER

//IMPORTS
const event = require('../models').activite;
const personne = require('../models').Personne;
const inscription = require('../models').inscrire;
const jwt = require('../token/jwt.utils');

//ALL METHODS
module.exports = {

    // METHODS SEND ALL EVENTS
    allEvent: (req, res) => {
        //found all event (joined to "personne" table)
        event.findAll({
            include: [{
                model: personne,
                attributes: ['Nom', 'Prenom']
            }]
        })

        //all eventuality (promise)
        //.then((response)=>{res.json(JSON.stringify({"name": "valid", "value": response}));})
            .then((response) => {
                res.json({"name": "valid", "value": response});
            })
            .catch(err => {
                console.log(err);
                res.json({"name": "error", "value": "can not find any event"});
            });
    },

    // METHODS SEND ALL EVENTS WITH INSCRIPTION
    allEventPlusPlus: (req, res) => {
        let authentication = req.header('Authorization');
        let UserId = jwt.constrolTokenIdRole(authentication).userId;
        let UserRoleId = jwt.constrolTokenIdRole(authentication).idRole;
        //let EventId = req.body.idEvent;

        if (authentication === null) {
            res.json({name: "error", value: "empty param"})
        } else if (UserId < 0 && UserRoleId < 0) {
            res.json({"name": "error", "value": "invalid token"});
        } else {
            event.findAll({
                include: [{
                    model: inscription,
                    where: {id_PERSONNE: UserId},
                    required: false
                }
                ]
            }).then(response=>{res.json({name: "valid", value: response})}).
                catch(err=>{res.json({name: "error", value: err})});
        }


            //all eventuality (promise)
            //.then((response)=>{res.json(JSON.stringify({"name": "valid", "value": response}));})
            .then((response)=>{res.json({name: "valid", value: response});})
            .catch(err=>{console.log(err); res.json({"name":"error", "value":"can not find any event"});});
    },

    //METHODS ADD AN EVENT
    addEvent: (req, res) => {
        let authentication = req.header('Authorization');
        let UserId = jwt.constrolTokenIdRole(authentication).userId;
        let UserRoleId = jwt.constrolTokenIdRole(authentication).idRole;
        let Name = req.body.Name;
        let Price = req.body.price;
        let image = req.body.image;
        let bio = req.body.bio;
        let date = req.body.date;
        console.log(`name : ${Name}, price : ${Price}, bio : ${bio}, date : ${date}`);


        if (Name === null || bio === null || Price === null || date === null || image === null) {
            res.json({"name": "error", "value": "empty body param"});

        } else {
            if (UserId < 0 && UserRoleId < 0) {
                res.json({"name": "error", "value": "invalid token"});
            } else {
                event.findOrCreate({
                    where: {
                        Nom: Name,
                        Date: date
                    },
                    defaults: {
                        Nom: Name,
                        Description: bio,
                        Date: date,
                        Prix: Price,
                        Image: image,
                        Validee: 0,
                        id_PERSONNE: UserId
                    }
                }).then((sqlresponse) => {
                        let string = sqlresponse.toString();
                        if (string.includes('true')) {
                            res.json({"name": "valid", "value": "event created"});
                        } else {
                            res.json({"name": "error", "value": "already exist"});
                        }

                    }
                ).catch(err => {
                    res.json({"name": "error", "value": err})
                });
            }
        }
    },

    // INSCRIPTION METHOD:
    changeInscription: (req, res) => {
        //get information from website
        let authentication = req.header('Authorization');
        let UserId = jwt.constrolTokenIdRole(authentication).userId;
        let idEvent = req.body.idEvent;

        //check if the inscription exist then delete it or add it working
        inscription.findOrCreate({
            where: {
                id_PERSONNE: UserId,
                id_ACTIVITE: idEvent
            }
        }).then(sqlresponse => {
            let string = sqlresponse.toString();
            if (string.includes('true')) {
                res.json({"name": "valid", "value": "user registered"});
            } else {
                inscription.destroy({
                    where: {
                        id_PERSONNE: UserId,
                        id_ACTIVITE: idEvent
                    }
                }).then(() => {
                    res.json({name: "valid", value: "user unregistered"})
                })
                    .catch(() => {
                        res.json({name: "error", value: "can not delete inscription"})
                    });
            }
        }).catch(err => {
            res.json({name: "error", value: err})
        });
    }


};
