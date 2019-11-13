"use strict";

// THIS IS THE EVENT CONTROLLER


//IMPORTS
const event = require('../models').activite;
const personne = require('../models').Personne;

//ALL METHODS
module.exports = {

    // METHODS SEND ALL EVENTS
    allEvent: (req, res)=> {
        //found all event (joined to "personne" table)
        event.findAll({
            include: [{
            model: personne,
            attributes: ['Nom', 'Prenom']
            }]
        })

            //all eventuality (promise)
            .then((response)=>{res.json(JSON.stringify({"name": "valid", "value": response}));})
            //.then((response)=>{res.json({"name": "valid", "value": response});})
            .catch(err=>{console.log(err); res.json(JSON.stringify({"name":"error", "value":"can not find any event"}));});
    },

    //METHODS ADD AN EVENT
    addEvent: (req,res)=>{
        let  nameEvent= req.body.nameEvent ;
        let  price    = req.body.price ;
        let  bio      = req.body.bio ;
        let  date     = req.body.date ;



    }


};
