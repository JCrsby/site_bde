/* jshint indent: 1 */
// const DataTypes  = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = function (sequelize, DataTypes) {
    const commande = sequelize.define('commande', {
        id: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            autoIncrement: true
        },
        Liste: {
            type: DataTypes.STRING(255),
            allowNull: false
        },
        Date: {
            type: DataTypes.DATEONLY,
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
        tableName: 'commande',
        timestamps: false,
        freezeTableName: true
    });

    commande.associate = (models) => {
        models.commande.belongsTo(models.Personne, {foreignKey: 'id_Personne'})
        models.commande.hasMany(models.nombre, {foreignKey: 'id_COMMANDE'})
    };
    return commande;
};
