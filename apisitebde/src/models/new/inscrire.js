/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('inscrire', {
    'id_ACTIVITE': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      comment: "null",
      references: {
        model: 'activite',
        key: 'id_ACTIVITE'
      }
    },
    'id_PERSONNE': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      comment: "null",
      references: {
        model: 'personne',
        key: 'id_PERSONNE'
      }
    }
  }, {
    tableName: 'inscrire'
  });
};
