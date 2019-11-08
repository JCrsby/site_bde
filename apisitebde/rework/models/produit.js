/* jshint indent: 1 */
const DataTypes = require('./index').Sequelize.DataTypes;
const sequelize = require('./index').sequelize;

// module.exports = function(sequelize, DataTypes) {
// 	return
sequelize.define('produit', {
    id: {
        type: DataTypes.INTEGER(11),
        allowNull: false,
        primaryKey: true,
        autoIncrement: true
    },
    Nom: {
        type: DataTypes.CHAR(50),
        allowNull: false
    },
    Description: {
        type: DataTypes.STRING(255),
        allowNull: false
    },
    Prix: {
        type: DataTypes.INTEGER(11),
        allowNull: false
    },
    Image: {
        type: DataTypes.STRING(255),
        allowNull: false
    },
    id_CATEGORIE: {
        type: DataTypes.INTEGER(11),
        allowNull: false,
        references: {
            model: 'categorie',
            key: 'id'
        }
    }
}, {
    tableName: 'produit'
});
//};
