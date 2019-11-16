//MODEL INSCRIPTION
module.exports = function (sequelize, DataTypes) {
    const inscrire = sequelize.define('inscrire', {
        //ALL TABLE'S COLUMN
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
//ASSOCIATIONS
    inscrire.associate = (models) => {
        models.inscrire.belongsTo(models.Personne, {foreignKey: 'id_PERSONNE'});
        models.inscrire.belongsTo(models.activite, {foreignKey: 'id_ACTIVITE'});

    };

    return inscrire
};
