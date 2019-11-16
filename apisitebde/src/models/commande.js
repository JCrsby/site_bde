/* jshint indent: 1 */
// const DataTypes  = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = function (sequelize, DataTypes) {
    const commande = sequelize.define('commande', {
        'id_COMMANDE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            primaryKey: true,
            comment: "null",
            autoIncrement: true
        },
        'Liste': {
            type: DataTypes.STRING(255),
            allowNull: false,
            comment: "null"
        },
        'Date': {
            type: DataTypes.DATEONLY,
            allowNull: false,
            comment: "null"
        },
        'Validee': {
            type: DataTypes.INTEGER(1),
            allowNull: false,
            comment: "null"
        },
        'id_PERSONNE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            comment: "null",
            references: {
                model: 'personne',
                key: 'id_PERSONNE'
            }
        }
    }, {
        tableName: 'commande',
        timestamps: false,
        freezeTableName: true
    });

    commande.associate = (models) => {
        models.commande.belongsTo(models.Personne, {foreignKey: 'id_PERSONNE'});
        models.commande.hasMany(models.nombre, {foreignKey: 'id_COMMANDE'})
    };
    return commande;
};
