//MODEL NUMBER
module.exports = function (sequelize, DataTypes) {
    const nombre = sequelize.define('nombre', {
        //ALL TABLE'S COLUMN
        'id_PRODUIT': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            comment: "null",
            references: {
                model: 'produit',
                key: 'id_PRODUIT'
            }
        },
        'id_COMMANDE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            comment: "null",
            references: {
                model: 'commande',
                key: 'id_COMMANDE'
            }
        },
        'Quantite': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            comment: "null"
        }
    }, {
        tableName: 'nombre',
        timestamps: false,
        freezeTableName: true
    });
	//ASSOCIATION
    nombre.associate = (models) => {
        models.nombre.belongsTo(models.commande, {foreignKey: 'id_COMMANDE'});
        models.nombre.belongsTo(models.produit, {foreignKey: 'id_PRODUIT'});

    };

    return nombre;
};
