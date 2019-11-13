/* jshint indent: 1 */
// const DataTypes = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = function(sequelize, DataTypes) {
	const role = sequelize.define('role', {
		id: {
			type: DataTypes.INTEGER(11),
			allowNull: false,
			primaryKey: true,
			autoIncrement: true
		},
		Status: {
			type: DataTypes.CHAR(255),
			allowNull: false
		}
	}, {
		tableName: 'role',
		timestamps: false,
		freezeTableName: true
	});

	role.associate = (models) => {
		models.role.hasMany(models.Personne, {foreignKey: 'id_ROLE'})
	};
	return role;
};
