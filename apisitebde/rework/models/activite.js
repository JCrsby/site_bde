/* jshint indent: 1 */
const DataTypes = require('./index').Sequelize.DataTypes;
const sequelize = require('./index').sequelize;

module.exports = //function(sequelize, DataTypes) {
//	return
    sequelize.define('activite', {
        id: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            autoIncrement: true
        },
        Nom: {
            type: DataTypes.CHAR(255),
            allowNull: false
        },
        Description: {
            type: DataTypes.STRING(255),
            allowNull: false
        },
        Date: {
            type: DataTypes.DATEONLY,
            allowNull: false
        },
        Prix: {
            type: DataTypes.DECIMAL,
            allowNull: false
        },
        Validee: {
            type: DataTypes.INTEGER(1),
            allowNull: false
        },
        id_PERSONNE: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            references: {
                model: 'personne',
                key: 'id'
            }
        }
    }, {
        tableName: 'activite'
    });
//};
