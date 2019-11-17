/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('role', {
    'id_ROLE': {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      primaryKey: true,
      comment: "null",
      autoIncrement: true
    },
    'Status': {
      type: DataTypes.CHAR(255),
      allowNull: false,
      comment: "null"
    }
  }, {
    tableName: 'role'
  });
};
