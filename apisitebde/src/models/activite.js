/* jshint indent: 1 */
//MODEL ACTIVITY
module.exports = function(sequelize, DataTypes) {
const activite = sequelize.define('activite', {


    // ALL TABLE'S COLUMN
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
            allowNull: false
            ,
            references: {
                model: 'personne',
                key: 'id'
            }
        }
    }, {
        tableName: 'activite',
        timestamps: false,
        freezeTableName: true,
    });


//ASSOCIATION TO OTHER TABLES
    activite.associate = (models)=>{
        models.activite.belongsTo(models.Personne, {foreignKey: 'id_PERSONNE'});
        models.activite.hasMany(models.photo, {foreignKey: 'id_ACTIVITE'});
        models.activite.hasMany(models.voter, {foreignKey: 'id_ACTIVITE'})
     };


return activite;
};
