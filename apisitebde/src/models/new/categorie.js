/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('categorie', {
    'id_CATEGORIE': {
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
    }
  }, {
    tableName: 'categorie'
  });
};
