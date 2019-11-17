//MODEL PRODUCT
module.exports = function (sequelize, DataTypes) {
    const produit = sequelize.define('produit', {
        //ALL TABLE'S COLUMN
        'id_PRODUIT': {
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
        'Description': {
            type: DataTypes.STRING(255),
            allowNull: false,
            comment: "null"
        },
        'Prix': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            comment: "null"
        },
        'Image': {
            type: DataTypes.STRING(255),
            allowNull: false,
            comment: "null"
        },
        'id_CATEGORIE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            comment: "null",
            references: {
                model: 'categorie',
                key: 'id_CATEGORIE'
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
