//MODEL PRODUCT
module.exports = function (sequelize, DataTypes) {
    const produit = sequelize.define('produit', {
        //ALL TABLE'S COLUMN
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
        Description: {
            type: DataTypes.STRING(255),
            allowNull: false
        },
        Prix: {
            type: DataTypes.INTEGER(11),
            allowNull: false
        },
        Image: {
            type: DataTypes.STRING(255),
            allowNull: false
        },
        id_CATEGORIE: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            references: {
                model: 'categorie',
                key: 'id'
            }
        }
    }, {
        tableName: 'produit',
        timestamps: false,
        freezeTableName: true
    });
    //ASSOCIATIONS
    produit.associate = (models) => {
        models.produit.belongsTo(models.categorie, {foreignKey: 'id_CATEGORIE'})
    };

    return produit;
};
