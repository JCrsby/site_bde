//IMPORTS
const personne = require('../models').Personne;
const role = require('../models').role;
const jwt = require('../token/jwt.utils');


const DEFAULT_ID = 1;

//ALL METHODS
module.exports = {

    //USER REGISTER METHOD
    register: (req, res) => {
        let firstName = req.body.firstName;
        let lastName = req.body.lastName;
        let campus = req.body.campus;
        let email = req.body.email;
        let password = req.body.password;

        //console.log({firstName, lastName, campus, email, password});
        //console.log(req.header);

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
                if (string.includes('true')) {
                    res.json({name: "valid", value: "user created"});
                } else {
                    res.json({name: "error", value: "already exist"});
                }

            }
        )
            .catch((err) => {
                // let jsonErr = JSON.stringify(err);
                res.json({name: 'error', value: err});
            });


    },

    //USER LOGIN METHOD
    login: (req, res) => {
        let mail = req.body.email;
        //let username = req.body.firstName;
        let password = req.body.password;

        if (mail === null || password === null) {
            res.status(400).json({name: "error", value: "empty param"});
        } else {
            personne.findOne({
                //attributes: ['Adresse_Mail', 'Mot_De_Passe'],
                where: {
                    Adresse_Mail: mail,
                    Mot_De_Passe: password
                }
            }).then((userFound) => {
                //console.log(userFound);
                res.json({
                    name: "valid",
                    value: {
                        userId: userFound.id_PERSONNE,
                        token: jwt.createUserToken(userFound)
                    }
                });
            }).catch(() => {
                return res.json({name: "error", value: "user do not exist"});
            })
        }
    },

    //GET USER INFORMATION METHOD
    getUserProfile: (req, res) => {
        let headerAuth = req.header('Authorization');
        let userId = jwt.constrolTokenIdRole(headerAuth).userId;
        //console.log(`valeur ${userId}`);
        if (headerAuth === null){

        }else {

            if (userId < 0) {
                res.status(400).json({"name": "error", "value": "invalid Token"});
            } else {
                personne.findOne({
                        where: {id_PERSONNE: userId},
                        attributes: ['id_PERSONNE', 'Adresse_Mail', 'Campus', 'Nom', 'Prenom', 'id_ROLE']
                    }
                ).then(response => {
                    //console.log("is working");
                    res.json({name: "valid", value: response})
                    //res.json({"name": "valid", "value": response});

                })
                    .catch(err => {
                        res.json({"name": "error", "value": "can not send request"})
                        //res.json({"name":"error", "value": err});

                    })
            }
        }
    },

    //DELETE USER METHOD //TODO implement method
    deleteUser: (req, res) => {
        res.send('delete user method -TODO : implement this method')
    },

    //ADD A ROLE TO AN USER //TODO implement method
    addRole: (req, res) => {
        res.send('add role to an user method -TODO : implement this method')
    },


};
