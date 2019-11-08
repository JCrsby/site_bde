/* jshint indent: 1 */

module.exports = function(sequelize, DataTypes) {
	return sequelize.define('inscrire', {
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
		tableName: 'inscrire'
	});
};
