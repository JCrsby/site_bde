"use strict";
const event = require('../models').activite;
const personne = require('../models').Personne;

module.exports = {
    allEvent: (req, res)=> {
        event.findAll({
            include: [{
            model: personne,
            attributes: ['Nom', 'Prenom']
            }]
        })
            .then((response)=>{res.json(JSON.stringify({"name": "valid", "value": response}));})
            //.then((response)=>{res.json({"name": "valid", "value": response});})
            .catch(err=>{res.json(JSON.stringify({"name":"error", "value":"can not find any event"}));});
    },

    addEvent: (req,res)=>{
        let  nameEvent= req.body.nameEvent ;
        let  price    = req.body.price ;
        let  bio      = req.body.bio ;
        let  date     = req.body.date ;



    }


};
