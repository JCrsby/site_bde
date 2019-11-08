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
    }


};
