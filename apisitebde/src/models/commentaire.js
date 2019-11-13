/* jshint indent: 1 */
// const DataTypes = require('./index').Sequelize.DataTypes;
// const sequelize = require('./index').sequelize;

module.exports = function(sequelize, DataTypes) {
	const commentaire = sequelize.define('commentaire', {
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
        tableName: 'commentaire',
        timestamps: false,
        freezeTableName: true
    });

	commentaire.associate = (models)=>{
	  models.commentaire.belongsTo(models.Personne, {foreignKey: 'id_PERSONNE'})
    };

	commentaire.associate = (models)=>{
	    models.commentaire.belongsTo(models.photo, {foreignKey: 'id_PHOTO'})
    };

    return commentaire;
};
