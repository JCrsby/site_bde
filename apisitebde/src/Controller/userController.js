const personne = require('../models').Personne;

//ALL METHODS
module.exports = {

    //USER REGISTER METHOD
    register: (req, res)=> {
        let firstName = req.body.firstName;
        let lastName = req.body.lastName;
        let campus = req.body.campus;
        let email = req.body.email;
        let password = req.body.password;

        if (firstName == null ||
            lastName == null ||
            campus == null ||
            email == null ||
            password == null){
            return res.send.json({"name": "error","value": "empty param"})}

        personne.findOrCreate()



    },

    //USER LOGIN METHOD
    //TODO : add token
    login: (req, res) => {
        let mail = req.body.email;
        let username = req.body.username;
        let password = req.body.password;

        if (mail === null || username === null || password === null) {
            res.status(400).json({'err': 'empty param'});
        }
        else {
            personne.findOne({
                //attributes: ['Adresse_Mail', 'Mot_De_Passe'],
                where: {Adresse_Mail: mail,
                Mot_De_Passe: password
                }
            }).then( (userFound) => {
                return res.json(userFound);
            }).catch(function (err) {
                return res.send(err);
            })
        }
    },

    //DELETE USER METHOD
    deleteUser: (req, res)=>{
        res.send('delete user method -TODO : implement this method')
    },

    //ADD A ROLE TO AN USER
    addRole: (req, res)=>{
        res.send('add role to an user method -TODO : implement this method')
    },


};
