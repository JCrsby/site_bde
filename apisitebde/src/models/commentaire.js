/* jshint indent: 1 */
//MODEL COMMENT
module.exports = function (sequelize, DataTypes) {
    const commentaire = sequelize.define('commentaire', {


        //ALL TABLE'S COLUMN
        'id_COMMENTAIRE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            primaryKey: true,
            comment: "null",
            autoIncrement: true
        },
        'Contenu': {
            type: DataTypes.STRING(255),
            allowNull: false,
            comment: "null"
        },
        'id_PERSONNE': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            comment: "null",
            references: {
                model: 'personne',
                key: 'id_PERSONNE'
            }
        },
        'id_PHOTO': {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            comment: "null",
            references: {
                model: 'photo',
                key: 'id_PHOTO'
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
