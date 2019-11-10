/* jshint indent: 1 */
// const DataTypes = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = function(sequelize, DataTypes) {
    return sequelize.define('inscrire', {
        id: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            references: {
                model: 'activite',
                key: 'id'
            }
        },
        id_PERSONNE: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            references: {
                model: 'personne',
                key: 'id'
            }
        }
    }, {
        tableName: 'inscrire',
        timestamps: false,
        freezeTableName: true
    });
};
