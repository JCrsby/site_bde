/* jshint indent: 1 */
//MODEL COMMENT
module.exports = function (sequelize, DataTypes) {
    const commentaire = sequelize.define('commentaire', {


        //ALL TABLE'S COLUMN
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


    //ASSOCIATIONS
    commentaire.associate = (models) => {
        models.commentaire.belongsTo(models.Personne, {foreignKey: 'id_PERSONNE'});
        models.commentaire.belongsTo(models.photo, {foreignKey: 'id_PHOTO'});

    };

    return commentaire;
};
