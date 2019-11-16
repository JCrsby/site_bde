/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('nombre', {
    'id_PRODUIT': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      comment: "null",
      references: {
        model: 'produit',
        key: 'id_PRODUIT'
      }
    },
    'id_COMMANDE': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      comment: "null",
      references: {
        model: 'commande',
        key: 'id_COMMANDE'
      }
    },
    'Quantite': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      comment: "null"
    }
  }, {
    tableName: 'nombre'
  });
};
