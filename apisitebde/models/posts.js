'use strict';
module.exports = (sequelize, DataTypes) => {
  const posts = sequelize.define('posts', {
    image: DataTypes.STRING,
    bio: DataTypes.STRING,
    idEtudiant: DataTypes.INTEGER,
    idActivite: DataTypes.INTEGER
  }, {});
  posts.associate = function(models) {
    // associations can be defined here
  };
  return posts;
};
