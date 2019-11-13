//MODEL ROLE
module.exports = function(sequelize, DataTypes) {
	const role = sequelize.define('role', {
		//ALL TABLE'S COLUMN
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

	//ASSOCIATIONS
	role.associate = (models) => {
		models.role.hasMany(models.Personne, {foreignKey: 'id_ROLE'})
	};
	return role;
};
