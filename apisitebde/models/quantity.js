'use strict';
module.exports = (sequelize, DataTypes) => {
  const quantity = sequelize.define('quantity', {
    idProduct: DataTypes.INTEGER,
    idCommand: DataTypes.INTEGER,
    quantity: DataTypes.INTEGER
  }, {});
  quantity.associate = function(models) {
    // associations can be defined here
  };
  return quantity;
};