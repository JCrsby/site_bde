'use strict';
module.exports = (sequelize, DataTypes) => {
  const users = sequelize.define('users', {
    name: DataTypes.STRING,
    firstname: DataTypes.STRING,
    campus: DataTypes.STRING,
    email: DataTypes.STRING,
    password: DataTypes.STRING,
    idRole: DataTypes.INTEGER
  }, {});
  users.associate = function(models) {
    // associations can be defined here
    models.Users.hasMany(models.Posts);
    models.Users.hasMany(models.Participate);
    models.Users.hasMany(models.Event);
    models.User.hasMany(models.Comment);
    models.Users.hasMany(models.Likes);
    models.Users.hasMany(models.Command);

  };
  return users;
};
