//MODEL PHOTOS
module.exports = function(sequelize, DataTypes) {
	const photo = sequelize.define('photo', {
        //ALL TABLE'S COLUMN
	    id: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            autoIncrement: true
        },
        URL: {
            type: DataTypes.CHAR(50),
            allowNull: false
        },
        Description: {
            type: DataTypes.CHAR(255),
            allowNull: false
        },
        Evenements: {
            type: DataTypes.CHAR(255),
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
        id_ACTIVITE: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            references: {
                model: 'activite',
                key: 'id'
            }
        }
    }, {
        tableName: 'photo',
        timestamps: false,
        freezeTableName: true
    });
    //ASSOCIATIONS
    photo.associate = (models)=> {
        models.photo.hasMany(models.commande, {foreignKey: 'id_PHOTO'});
        models.photo.belongsTo(models.activite, {foreignKey: 'id_ACTIVITE'})
    };
	return photo;
};
