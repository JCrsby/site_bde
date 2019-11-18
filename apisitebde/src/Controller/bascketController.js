"use strict";

//IMPORT
const commande = require('../models/').commande;
const jwt = require('../token/jwt.utils');
const nombre = require('../models').nombre;
const produit = require('../models').produit;

module.exports = {


    addToBascket: (req, res) => {
        let date = new Date();
        let authentication = req.header('Authorization');
        let UserId = jwt.constrolTokenIdRole(authentication).userId;
        let idProduct = req.body.idProduct;
        let idCommande;

        commande.findOrCreate({
            where: {
                id_PERSONNE: UserId,
                Validee: false
            },
            defaults: {
                Date: date,
                Liste: "useless"
            }
        }).then(result => {
                const [object, find] = result;
                idCommande = object.id_COMMANDE;

                nombre.create({
                    id_COMMANDE: idCommande,
                    id_PRODUIT: idProduct,
                    Quantite: 1
                }).then(() => {
                    res.json({name: "valid", value: "add to basket"})
                })
                    .catch(err => {
                        nombre.increment({
                                Quantite: 1
                            },
                            {
                                where: {
                                    id_COMMANDE: idCommande,
                                    id_PRODUIT: idProduct
                                },

                            })
                            .then(() => {
                                res.json({name: "valid", value: "increment + 1"})

                    }).catch(err => {res.json({name: "error", value: err})});
            }
        );
    }).catch(err => {res.json({name: "error", value: err})})},

    allBasket: (req, res) => {
        let authentication = req.header('Authorization');
        let UserId = jwt.constrolTokenIdRole(authentication).userId;

        commande.findOne({
            where: {
                id_PERSONNE: UserId,
                Validee: 0
            },
            include: [{
                model: nombre,
                required: false,
                include: [{
                    model: produit
                }]
            }]
        }).then(response => {
            res.json({name: "valid", value: response})
        })
            .catch(err => {
                res.json({name: "error", value: err})
            });
    },

    deleteBasket: (req, res) => {
        let authentication = req.header('Authorization');
        let UserId = jwt.constrolTokenIdRole(authentication).userId;
        let productId = req.body.idProduct;

        commande.findOne({
            where: {
                id_Personne: UserId,
                Validee: false
            }
        }).then(response => {
                nombre.destroy({
                    where: {
                        id_PRODUIT: productId,
                        id_COMMANDE: response.id_COMMANDE
                    }
                }).then(() => {
                    res.json({name: "valid", value: "deleted basket item"})
                })
                    .catch(err => {
                        res.json({name: "error", value: err})
                    });
            }
        ).catch(err => {
            res.json({name: "error", value: err})
        });

    }
};