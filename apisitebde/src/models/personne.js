/* jshint indent: 1 */
// const DataTypes = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = (sequelize, DataTypes)=>{
    const Personne = sequelize.define('Personne', {
        id: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            autoIncrement: true
        },
        Nom: {
            type: DataTypes.CHAR(50),
            allowNull: false
        },
        Prenom: {
            type: DataTypes.CHAR(50),
            allowNull: false
        },
        Campus: {
            type: DataTypes.CHAR(50),
            allowNull: false
        },
        Adresse_Mail: {
            type: DataTypes.STRING(255),
            allowNull: false
        },
        Mot_De_Passe: {
            type: DataTypes.STRING(20),
            allowNull: false
        },
        id_ROLE: {
            type: DataTypes.INTEGER(11),
            allowNull: false
            // ,
            // references: {
            //     model: 'role',
            //     key: 'id'
            // }
        }
    }, {
        tableName: 'personne',
        timestamps: false,
        freezeTableName: true,
    });

    Personne.associate = (models)=>{
        models.Personne.belongsTo(models.role, {foreignKey: 'id_ROLE'})
        models.Personne.hasMany(models.activite, {foreignKey: 'id_PERSONNE'})
        models.Personne.hasMany(models.commande, {foreignKey: 'id_PERSONNE'})
        models.Personne.hasMany(models.commentaire, {foreignKey: 'id_PERSONNE'})
        models.Personne.hasMany(models.inscrire, {foreignKey: 'id_PERSONNE'})
    };
    return Personne;
};
