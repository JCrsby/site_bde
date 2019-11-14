//MODEL VOTE
module.exports = function(sequelize, DataTypes) {
    const voter =sequelize.define('voter', {
        //ALL TABLE'S COLUMN
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

    //ASSOCIATIONS
    voter.associate = models => {
        models.voter.belongsTo(models.activite, {foreignKey: 'id_ACTIVITE'})
    };

return voter;
};
