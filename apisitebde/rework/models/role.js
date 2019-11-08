/* jshint indent: 1 */

module.exports = function(sequelize, DataTypes) {
	return sequelize.define('role', {
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
		tableName: 'role'
	});
};
