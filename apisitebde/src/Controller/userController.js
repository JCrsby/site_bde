const DEFAULT_ID = 1;
const personne = require('../models').Personne;
const jwt = require('../token/jwt.utils');

//ALL METHODS
module.exports = {

    //USER REGISTER METHOD
    register: (req, res) => {
        let firstName = req.body.firstName;
        let lastName = req.body.lastName;
        let campus = req.body.campus;
        let email = req.body.email;
        let password = req.body.password;

        if (firstName == null ||
            lastName == null ||
            campus == null ||
            email == null ||
            password == null) {
            return res.json({name: "error", value: "empty param"})
        }

        personne.findOrCreate({
            where: {Adresse_Mail: email},
            defaults: {
                Nom: lastName,
                Prenom: firstName,
                Campus: campus,
                Mot_De_Passe: password,
                id_ROLE: DEFAULT_ID
            }
        }).then((sqlresponse) => {
            let string = sqlresponse.toString();
            if (string.includes('true')){
                res.json({name: "valid", value: "user created"});
            } else {
                res.json({name: "error", value: "already exist"});
            }

            }
        )
            .catch((err) => {
                let jsonErr = JSON.stringify(err);
                res.json({name: 'error', value: jsonErr});
            });


    },

    //USER LOGIN METHOD
    //TODO : add token
    login: (req, res) => {
        let mail = req.body.email;
        let username = req.body.firstName;
        let password = req.body.password;

        if (mail === null || username === null || password === null) {
            res.status(400).json({'err': 'empty param'});
        } else {
            personne.findOne({
                //attributes: ['Adresse_Mail', 'Mot_De_Passe'],
                where: {
                    Adresse_Mail: mail,
                    Mot_De_Passe: password
                }
            }).then((userFound) => {
                 res.json({
                    name: "valid",
                    values: {
                        userId: userFound.id,
                        token: jwt.createUserToken(userFound)
                    }
                });
            }).catch(() => {
                return res.json({name: "error", value: "user do not exist"});
            })
        }
    },

    //DELETE USER METHOD
    deleteUser: (req, res) => {
        res.send('delete user method -TODO : implement this method')
    },

    //ADD A ROLE TO AN USER
    addRole: (req, res) => {
        res.send('add role to an user method -TODO : implement this method')
    },


};
