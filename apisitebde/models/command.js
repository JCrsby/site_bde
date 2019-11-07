'use strict';
module.exports = (sequelize, DataTypes) => {
  const command = sequelize.define('command', {
    list: DataTypes.STRING,
    date: DataTypes.DATE,
    idUser: DataTypes.INTEGER,
    validate: DataTypes.BOOLEAN
  }, {});
  command.associate = function(models) {
    // associations can be defined here
  };
  return command;
};
