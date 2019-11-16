/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('produit', {
    'id_PRODUIT': {
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
    'Description': {
      type: DataTypes.STRING(255),
      allowNull: false,
      comment: "null"
    },
    'Prix': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      comment: "null"
    },
    'Image': {
      type: DataTypes.STRING(255),
      allowNull: false,
      comment: "null"
    },
    'id_CATEGORIE': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      comment: "null",
      references: {
        model: 'categorie',
        key: 'id_CATEGORIE'
      }
    }
  }, {
    tableName: 'produit'
  });
};
