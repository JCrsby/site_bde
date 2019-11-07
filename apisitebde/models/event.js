'use strict';
module.exports = (sequelize, DataTypes) => {
  const event = sequelize.define('event', {
    name: DataTypes.STRING,
    bio: DataTypes.STRING,
    date: DataTypes.DATE,
    price: DataTypes.INTEGER,
    validate: DataTypes.BOOLEAN,
    repetition: DataTypes.STRING,
    idUser: DataTypes.INTEGER
  }, {});
  event.associate = function(models) {
    // associations can be defined here
  };
  return event;
};
