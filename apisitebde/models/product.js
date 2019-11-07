'use strict';
module.exports = (sequelize, DataTypes) => {
  const product = sequelize.define('product', {
    name: DataTypes.STRING,
    bio: DataTypes.STRING,
    price: DataTypes.INTEGER,
    images: DataTypes.STRING,
    idtype: DataTypes.INTEGER
  }, {});
  product.associate = function(models) {
    // associations can be defined here
  };
  return product;
};
