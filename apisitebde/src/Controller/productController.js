// THIS IS THE PRODUCT CONTROLLER


//IMPORT
const product = require('../models').produit;
const categorie = require('../models').categorie;


// ALL METHODS
module.exports = {

    allProduct: (req, res)=> {
        //FIND ALL PRODUCT
        product.findAll({
            include: [{
                model: categorie,
                attributes: ['Nom']
            }]
        })
            .then(result => {res.json(JSON.stringify({"name": "valid", "value": result}))})
            //.then(result => {res.json({"name": "valid", "value": result})})
            .catch(err => {res.json(JSON.stringify({"name": "error", "value": err}))});

    },
    //FIND ALL PRODUCTS ORDERED BY PRICE ASC
    LowenToHigher: (req, res)=>{
        product.findAll({
            include: [{
                model: categorie,
                attributes: ['Nom']
            }],
            order: [[
                'Prix', 'ASC'
            ]]
        })
            //RESPONSES
            .then(result => {res.json(JSON.stringify({"name": "valid", "value": result}))})
            //.then(result => {res.json({"name": "valid", "value": result})})
            .catch(err => {res.json(JSON.stringify({"name": "error", "value": err}))});
    },

    //FIND ALL PRODUCTS ORDERED BY PRICE DESC
    HigerToLower: (req,res)=>{
        product.findAll({
            include: [{
                model: categorie,
                attributes: ['Nom']
            }],
            order: [[
                'Prix', 'DESC'
            ]]
        })
            //RESPONSES
            .then(result => {res.json(JSON.stringify({"name": "valid", "value": result}))})
            //.then(result => {res.json({"name": "valid", "value": result})})
            .catch(err => {res.json(JSON.stringify({"name": "error", "value": err}))});
    }


};
