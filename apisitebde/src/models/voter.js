//MODEL VOTE
module.exports = function(sequelize, DataTypes) {
    const voter =sequelize.define('voter', {
        //ALL TABLE'S COLUMN
        'id_PERSONNE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            comment: "null",
            references: {
                model: 'personne',
                key: 'id_PERSONNE'
            }
        },
        'id_ACTIVITE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            comment: "null",
            references: {
                model: 'activite',
                key: 'id_ACTIVITE'
            }
        }
    }, {
        tableName: 'voter',
        timestamps: false,
        freezeTableName: true
    });

    //ASSOCIATIONS
    voter.associate = models => {
        models.voter.belongsTo(models.activite, {foreignKey: 'id_ACTIVITE'})
    };

return voter;
};
