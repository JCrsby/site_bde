const db = require('../models/index').sequelize;
const models = require('../models');

//ALL METHODS
module.exports = {

    //USER REGISTER METHOD
    register: (req, res)=> {
        let email = req.body.email;
        let username = req.body.username;
        let bio = req.body.bio;

        res.send(`hello ${username} this is your emil : ${email} and this is your bio ${bio} `)


    },

    //USER LOGIN METHOD
    login: (req, res)=> {
        res.send('login method -TODO : implement this method')
    },

    //DELETE USER METHOD
    deleteUser: (req, res)=>{
        res.send('delete user method -TODO : implement this method')
    },

    //ADD A ROLE TO AN USER
    addRole: (req, res)=>{
        res.send('add role to an user method -TODO : implement this method')
    },

    //TESTING METHODS
    addUser: (req, res)=>{
        let email = req.body.email;
        let username = req.body.username;
        let firstName = req.body.firstname;
        let password = req.body.password;
        let campus = req.body.campus;
        let role = req.body.role;

        if (email === null || username === null || firstName === null || password === null || campus === null || role === null){
          res.send.status(400).json({'error': 'wrong parameter'});
        }else{
            models.personne.findOrCreate({
                where: {Adresse_Mail: email},
                defaults: {Nom: username, Prenom: firstName, Mot_De_Passe: password, Campus: campus, id_Role: role}
            }).then(res.send(`user ${username} has been created`))
                .catch(res.send(`avorted`))
        }
    }


};
