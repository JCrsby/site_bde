/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('commentaire', {
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
    tableName: 'commentaire'
  });
};
