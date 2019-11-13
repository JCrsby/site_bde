const DEFAULT_ID = 1;
const personne = require('../models').Personne;
const role = require('../models').role;
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
            return res.json(JSON.stringify({name: "error", value: "empty param"}))
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
                    res.json(JSON.stringify({name: "valid", value: "user created"}));
                } else {
                    res.json(JSON.stringify({name: "error", value: "already exist"}));
                }

            }
        )
            .catch((err) => {
                // let jsonErr = JSON.stringify(err);
                res.json(JSON.stringify({name: 'error', value: err}));
            });


    },

    //USER LOGIN METHOD
    login: (req, res) => {
        let mail = req.body.email;
        let username = req.body.firstName;
        let password = req.body.password;

        if (mail === null || username === null || password === null) {
            res.status(400).json(JSON.stringify({"name": "error", "value": "empty param"}));
        } else {
            personne.findOne({
                //attributes: ['Adresse_Mail', 'Mot_De_Passe'],
                where: {
                    Adresse_Mail: mail,
                    Mot_De_Passe: password
                }
            }).then((userFound) => {
                res.json(JSON.stringify({
                    name: "valid",
                    values: {
                        userId: userFound.id,
                        token: jwt.createUserToken(userFound)
                    }
                }));
            }).catch(() => {
                return res.json(JSON.stringify({name: "error", value: "user do not exist"}));
            })
        }
    },

    //GET USER INFORMATION METHOD
    getUserProfile: (req, res) => {
        console.log(req.header);
        console.log(req.header('authorization'));
        let headerAuth = req.header('Authorization');
        let userId = jwt.getUserId(headerAuth);

        if (userId < 0) {
            res.status(400).json(JSON.stringify({"name": "error", "value": "invalid Token"}));
        } else {
            personne.findOne({
                    where: {id: userId},
                    attributes: ['id', 'Adresse_Mail', 'Campus', 'Nom', 'Prenom']
                }
            ).then(response => {
                res.json(JSON.stringify({"name": "valid", "value": response}))
                //res.json({"name": "valid", "value": response});

            })
                .catch(err => {
                    res.json(JSON.stringify({"name":"error", "value": err}))
                    //res.json({"name":"error", "value": err});

                })
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
