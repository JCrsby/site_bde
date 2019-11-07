'use strict';
module.exports = (sequelize, DataTypes) => {
  const likes = sequelize.define('likes', {
    idUser: DataTypes.INTEGER,
    idPost: DataTypes.INTEGER,
    idEvent: DataTypes.INTEGER
  }, {});
  likes.associate = function(models) {
    // associations can be defined here
  };
  return likes;
};
