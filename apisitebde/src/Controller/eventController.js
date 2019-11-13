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
            .then((response)=>{res.json(response);})
            .catch(err=>{res.send({"error": err});});
    }



};
