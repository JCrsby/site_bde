'use strict';
module.exports = (sequelize, DataTypes) => {
  const participate = sequelize.define('participate', {
    idUser: DataTypes.INTEGER,
    idEvent: DataTypes.INTEGER
  }, {});
  participate.associate = function(models) {
    // associations can be defined here
  };
  return participate;
};