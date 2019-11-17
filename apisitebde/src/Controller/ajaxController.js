"use strict";

// THIS IS THE EVENT CONTROLLER

//IMPORTS
const event = require('../models').activite;
const personne = require('../models').Personne;
const jwt = require('../token/jwt.utils');
const product = require('../models').produit;
const categorie = require('../models').categorie;


//ALL METHODS
module.exports = {


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
                res.json(JSON.stringify({name: "valid", value: response}));
            })
            .catch(err => {
                console.log(err);
                res.json({"name": "error", "value": "can not find any event"});
            });
    },

    allUser: (req, res) => {
        personne.findAll()
            .then(response => (res.json(JSON.stringify({name: "valid", value: response}))))
            .then(err => {res.json(JSON.stringify({name: "error", value: err}))});
    },



    allProduct: (req, res) => {
        //FIND ALL PRODUCT
        product.findAll({
            include: [{
                model: categorie,
                attributes: ['Nom']
            }]
        })
        //.then(result => {res.json(JSON.stringify({name: "valid", value: result}))})
            .then(result => {
                res.json(JSON.stringify({"name": "valid", "value": result}))
            })
            .catch(err => {
                res.json({"name": "error", "value": err})
            });

    },
};