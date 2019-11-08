const Sequelize = require('sequelize');
// const modelPersonne = require('../model/personne');
// const dataType = require('sequelize').DataTypes;

const database = new Sequelize('sequelize', 'root', '', {
    host: 'localhost',
    dialect: 'mysql'
});


//modelPersonne(database, dataType);


module.exports = database;

