/* jshint indent: 1 */
// const Sequelize = require('./index').Sequelize;
// const sequelize = require('./index').sequelize;
// const DataTypes = Sequelize.DataTypes;

module.exports = function(sequelize, DataTypes) {
const activite = sequelize.define('activite', {
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
        tableName: 'activite',
        timestamps: false,
        freezeTableName: true

    });
activite.assciate((models)=>{
   activite.belongsTo(models.personne, {foreignKey: 'id'})
});


return activite;
};
