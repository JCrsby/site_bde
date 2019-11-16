/* jshint indent: 1 */
//MODEL ACTIVITY
module.exports = function(sequelize, DataTypes) {
const activite = sequelize.define('activite', {


    // ALL TABLE'S COLUMN
    'id_ACTIVITE': {
        type: DataTypes.INTEGER(11),
        allowNull: false,
        primaryKey: true,
        primaryKey: true,
        comment: "null",
        autoIncrement: true
    },
    'Nom': {
        type: DataTypes.CHAR(255),
        allowNull: false,
        comment: "null"
    },
    'Description': {
        type: DataTypes.STRING(255),
        allowNull: false,
        comment: "null"
    },
    'Date': {
        type: DataTypes.DATEONLY,
        allowNull: false,
        comment: "null"
    },
    'Prix': {
        type: DataTypes.DECIMAL,
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
        tableName: 'activite',
        timestamps: false,
        freezeTableName: true,
    });


//ASSOCIATION TO OTHER TABLES
    activite.associate = (models)=>{
        models.activite.belongsTo(models.Personne, {foreignKey: 'id_PERSONNE'});
        models.activite.hasMany(models.photo, {foreignKey: 'id_ACTIVITE'});
        models.activite.hasMany(models.voter, {foreignKey: 'id_ACTIVITE'});
        models.activite.hasMany(models.inscrire, {foreignKey: 'id_ACTIVITE'});
    };


return activite;
};
