"use strict";


const photo = require('../models/').photo;
const jwt = require('../token/jwt.utils');


module.exports = {
    addComment: (req, res) => {
        let authentication = req.header('Authorization');
        let UserId = jwt.constrolTokenIdRole(authentication).userId;
        let idEvent = req.body.idEvent;
        let bio = req.body.bio;

        if (idEvent === null || bio === null) {
            res.json({name: "error", value: "empty param"});
        } else if (UserId < 0) {
            res.json({name: "error", value: "invalid token"});
        } else {
            photo.create({
                    URL: 'random',
                    Description: bio,
                    Evenements: 'random',
                    id_PERSONNE: UserId,
                    id_ACTIVITE: idEvent,
                    id_PERSONNE_Poster: UserId

            }).then(()=>{res.json({name: "valid", value: "created commentary"})})
                .catch(err=>{res.json({name: "error", value: err})});
        }
    }


};