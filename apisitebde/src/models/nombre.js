/* jshint indent: 1 */
// const DataTypes  = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = function(sequelize, DataTypes) {
const nombre = sequelize.define('nombre', {
		id: {
			type: DataTypes.INTEGER(11),
			allowNull: false,
			primaryKey: true,
			references: {
				model: 'produit',
				key: 'id'
			}
		},
		id_COMMANDE: {
			type: DataTypes.INTEGER(11),
			allowNull: false,
			primaryKey: true,
			references: {
				model: 'commande',
				key: 'id'
			}
		},
		Quantite: {
			type: DataTypes.INTEGER(11),
			allowNull: false
		}
	}, {
		tableName: 'nombre',
	timestamps: false,
	freezeTableName: true
	});

	nombre.associate = (models) => {
		models.nombre.belongsTo(models.commande, {foreignKey: 'id_COMMANDE'})
	};

return nombre;
};
