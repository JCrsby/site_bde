/* jshint indent: 1 */

module.exports = function(sequelize, DataTypes) {
	return sequelize.define('commentaire', {
		id: {
			type: DataTypes.INTEGER(11),
			allowNull: false,
			primaryKey: true,
			autoIncrement: true
		},
		Contenu: {
			type: DataTypes.STRING(255),
			allowNull: false
		},
		id_PERSONNE: {
			type: DataTypes.INTEGER(11),
			allowNull: false,
			references: {
				model: 'personne',
				key: 'id'
			}
		},
		id_PHOTO: {
			type: DataTypes.INTEGER(11),
			allowNull: false,
			references: {
				model: 'photo',
				key: 'id'
			}
		}
	}, {
		tableName: 'commentaire'
	});
};
