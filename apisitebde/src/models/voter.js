/* jshint indent: 1 */
// const DataTypes = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = function(sequelize, DataTypes) {
    return sequelize.define('voter', {
        id: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            references: {
                model: 'personne',
                key: 'id'
            }
        },
        id_ACTIVITE: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            references: {
                model: 'activite',
                key: 'id'
            }
        }
    }, {
        tableName: 'voter',
        timestamps: false,
        freezeTableName: true
    });
};
