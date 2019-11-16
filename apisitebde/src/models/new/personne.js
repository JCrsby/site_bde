/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('personne', {
    'id_PERSONNE': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      primaryKey: true,
      comment: "null",
      autoIncrement: true
    },
    'Nom': {
      type: DataTypes.CHAR(50),
      allowNull: false,
      comment: "null"
    },
    'Prenom': {
      type: DataTypes.CHAR(50),
      allowNull: false,
      comment: "null"
    },
    'Campus': {
      type: DataTypes.CHAR(50),
      allowNull: false,
      comment: "null"
    },
    'Adresse_Mail': {
      type: DataTypes.STRING(255),
      allowNull: false,
      comment: "null"
    },
    'Mot_De_Passe': {
      type: DataTypes.STRING(20),
      allowNull: false,
      comment: "null"
    },
    'id_ROLE': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      comment: "null",
      references: {
        model: 'role',
        key: 'id_ROLE'
      }
    }
  }, {
    tableName: 'personne'
  });
};
