'use strict';
module.exports = (sequelize, DataTypes) => {
  const roles = sequelize.define('roles', {
    role: DataTypes.STRING
  }, {});
  roles.associate = function(models) {
    // associations can be defined here
  };
  return roles;
};