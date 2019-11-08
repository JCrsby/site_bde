const Sequelize = require('sequelize');
const modelPersonne = require('../model/personne');
const dataType = require('sequelize').DataTypes;

const sequelize = new Sequelize('sequelize', 'root', '', {
    host: 'localhost',
    dialect: 'mysql'
});


exports = modelPersonne(sequelize, dataType);


module.exports = sequelize;

