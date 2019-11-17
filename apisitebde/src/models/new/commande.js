/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('commande', {
    'id_COMMANDE': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      primaryKey: true,
      comment: "null",
      autoIncrement: true
    },
    'Liste': {
      type: DataTypes.STRING(255),
      allowNull: false,
      comment: "null"
    },
    'Date': {
      type: DataTypes.DATEONLY,
      allowNull: false,
      comment: "null"
    },
    'Validee': {
      type: DataTypes.INTEGER(1),
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
    }
  }, {
    tableName: 'commande'
  });
};
