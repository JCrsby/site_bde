/* jshint indent: 1 */
// const DataTypes = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = function(sequelize, DataTypes) {
	const photo = sequelize.define('photo', {
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

    photo.associate = (models)=> {
        models.photo.hasMany(models.commande, {foreignKey: 'id_PHOTO'});
        models.photo.belongsTo(models.activite, {foreignKey: 'id_ACTIVITE'})
    };
	return photo;
};
