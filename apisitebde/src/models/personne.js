//MODEL USER
module.exports = (sequelize, DataTypes) => {
    const Personne = sequelize.define('Personne', {
        //ALL TABLE'S COLUMN
        'id_PERSONNE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            primaryKey: true,
            comment: "null",
            autoIncrement: true
        },
        'Nom': {
            type: DataTypes.CHAR(50),
            allowNull: false,
            comment: "null"
        },
        'Prenom': {
            type: DataTypes.CHAR(50),
            allowNull: false,
            comment: "null"
        },
        'Campus': {
            type: DataTypes.CHAR(50),
            allowNull: false,
            comment: "null"
        },
        'Adresse_Mail': {
            type: DataTypes.STRING(255),
            allowNull: false,
            comment: "null"
        },
        'Mot_De_Passe': {
            type: DataTypes.STRING(200),
            allowNull: false,
            comment: "null"
        },
        'id_ROLE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            comment: "null",
            references: {
                model: 'role',
                key: 'id_ROLE'
            }
        }
    }, {
        tableName: 'personne',
        timestamps: false,
        freezeTableName: true,
    });
    //ASSOCIATIONS
    Personne.associate = (models) => {
        models.Personne.belongsTo(models.role, {foreignKey: 'id_ROLE'});
        models.Personne.hasMany(models.activite, {foreignKey: 'id_PERSONNE'});
        models.Personne.hasMany(models.commande, {foreignKey: 'id_PERSONNE'});
        models.Personne.hasMany(models.commentaire, {foreignKey: 'id_PERSONNE'});
        models.Personne.hasMany(models.inscrire, {foreignKey: 'id_PERSONNE'});
    };
    return Personne;
};
