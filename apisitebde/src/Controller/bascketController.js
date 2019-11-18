"use strict";

//IMPORT
const commande = require('../models/').commande;
const jwt = require('../token/jwt.utils');



module.exports = {

    findoraddcommmande: (req, res)=> {
        let date = new Date();
        let authentication = req.header('Authorization');
        let UserId = jwt.constrolTokenIdRole(authentication).userId;

        commande.findOrCreate({
            where: {
                id_PERSONNE: UserId,
                Validee: false
            },
            defaults: {
                Date: date,
                Liste: "useless"
            }
        }).then(response => {let id = JSON.parse(JSON.stringify(response))
            console.log(id.id_PERSONNE);

        })
            .catch(err => {console.log(err)});



    }



};