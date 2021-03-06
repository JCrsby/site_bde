/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('photo', {
    'id_PHOTO': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      primaryKey: true,
      comment: "null",
      autoIncrement: true
    },
    'URL': {
      type: DataTypes.CHAR(50),
      allowNull: false,
      comment: "null"
    },
    'Description': {
      type: DataTypes.CHAR(255),
      allowNull: false,
      comment: "null"
    },
    'Evenements': {
      type: DataTypes.CHAR(255),
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
    'id_ACTIVITE': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      comment: "null",
      references: {
        model: 'activite',
        key: 'id_ACTIVITE'
      }
    },
    'id_PERSONNE_Poster': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      comment: "null",
      references: {
        model: 'personne',
        key: 'id_PERSONNE'
      }
    }
  }, {
    tableName: 'photo'
  });
};
