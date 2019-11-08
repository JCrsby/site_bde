'use strict';
const db = require('../database/database');
const DataTypes = require('sequelize').DataTypes;

    module.exports = db.define("personne", {
        prenom: {
            type: DataTypes.STRING,
            allowNull: false
        },
        nom: {
            type: DataTypes.STRING,
            allowNull: false

        },
        mail: {
            type: DataTypes.STRING,
            allowNull: false
        },
        campus: {
            type: DataTypes.STRING,
            allowNull: false

        },
        password: {
            type: DataTypes.STRING,
            allowNull: false

        },
        id_role: {
            type: DataTypes.INTEGER,
            allowNull: true

        }
    });
