'use strict';
module.exports = (sequelize, DataTypes) => {
  const comment = sequelize.define('comment', {
    content: DataTypes.STRING,
    idUser: DataTypes.INTEGER,
    idPost: DataTypes.INTEGER
  }, {});
  comment.associate = function(models) {
    // associations can be defined here
  };
  return comment;
};