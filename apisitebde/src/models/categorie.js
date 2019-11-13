/* jshint indent: 1 */
// const DataTypes = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = function(sequelize, DataTypes) {
	const categorie = sequelize.define('categorie', {
        id: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            autoIncrement: true
        },
        Nom: {
            type: DataTypes.CHAR(50),
            allowNull: false
        }
    }, {
        tableName: 'categorie',
        timestamps: false,
        freezeTableName: true
    });
    categorie.associate = (models) => {
        models.categorie.hasMany(models.produit, {foreignKey: 'id_CATEGORIE'})
    };

	return categorie;
};
