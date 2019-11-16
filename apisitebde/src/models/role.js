//MODEL ROLE
module.exports = function(sequelize, DataTypes) {
	const role = sequelize.define('role', {
		//ALL TABLE'S COLUMN
		'id_ROLE': {
			type: DataTypes.INTEGER(11),
			allowNull: false,
			primaryKey: true,
			primaryKey: true,
			comment: "null",
			autoIncrement: true
		},
		'Status': {
			type: DataTypes.CHAR(255),
			allowNull: false,
			comment: "null"
		}
	}, {
		tableName: 'role',
		timestamps: false,
		freezeTableName: true
	});

	//ASSOCIATIONS
	role.associate = (models) => {
		models.role.hasMany(models.Personne, {foreignKey: 'id_ROLE'})
	};
	return role;
};
