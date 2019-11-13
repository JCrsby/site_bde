//IMPORT
const product = require('../models').produit;
const categorie = require('../models').categorie;



module.exports = {

    allProduct: (req, res)=> {
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
            //.then(result => {res.json(JSON.stringify({"name": "valid", "value": result}))})
            .then(result => {res.json({"name": "valid", "value": result})})
            .catch(err => {res.json(JSON.stringify({"name": "error", "value": err}))});
    },

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
        //.then(result => {res.json(JSON.stringify({"name": "valid", "value": result}))})
            .then(result => {res.json({"name": "valid", "value": result})})
            .catch(err => {res.json(JSON.stringify({"name": "error", "value": err}))});
    }


};
