const event = require('../models').activite;
const Personne = require('../models').Personne;

module.exports = {
    allEvent: (req, res)=> {
        event.findAll({include: [Personne]}).then((response)=>{res.json(response)}).catch(err=>{res.send({"error": "don't work"})})
    }



};
