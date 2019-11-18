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
            //.then(result => {res.json(JSON.stringify({name: "valid", value: result}))})
            .then(result => {res.json({"name": "valid", "value": result})})
            .catch(err => {res.json({"name": "error", "value": err})});

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
            .then(result => {res.json({"name": "valid", "value": result})})
            //.then(result => {res.json({"name": "valid", "value": result})})
            .catch(err => {res.json({"name": "error", "value": err})});
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
            .then(result => {res.json({"name": "valid", "value": result})})
            //.then(result => {res.json({"name": "valid", "value": result})})
            .catch(err => {res.json({"name": "error", "value": err})});
    },

    addProduct: (req, res)=>{
        let Name = req.body.name;
        let bio = req.body.description;
        let price = req.body.price;
        let img = req.body.img;
        let idCategorie = req.body.categories;

        console.log(`name : ${Name}, bio : ${bio}, prix: ${price}, img: ${img}, cat: ${idCategorie}`);
        if (Name == null ||
            bio == null ||
            price == null ||
            img == null ||
            idCategorie == null) {
            return res.json({name: "error", value: "empty param"})
        }else {
            product.create({
                Nom: Name,
                Description: bio,
                Prix: price,
                Image: img,
                id_CATEGORIE: idCategorie
            })
                .then(response => {res.json({name: "valid", value: response})})
                .catch(err => {res.json({name: "err", value: err})});
        }

    },

    deleteProduct: (req, res)=>{
        let idProduct = req.body.idProduct;


        product.destroy({
            cascade: true,
            where: {
                id_PRODUCT: idProduct
            }
        }).then(()=>{console.log("working")})
            .then(()=> {console.log("lets debug")})


    }


};
