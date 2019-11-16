"use strict";

//IMPORT
const event = require('../models').activite;
const personne = require('../models').Personne;
const inscription = require('../models').inscrire;
const jwt = require('../token/jwt.utils');

module.exports = {

    // INSCRIPTION METHOD:
    changeInscription: (req, res) => {
        //get information from website
        let authentication = req.header('Authorization');
        let UserId = jwt.constrolTokenIdRole(authentication).userId;
        let idEvent = req.body.idEvent;

        //check if the inscription exist then delete it or add it
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