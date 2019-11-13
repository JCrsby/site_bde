/* jshint indent: 1 */
//MODEL CATEGORIES
module.exports = function (sequelize, DataTypes) {
    const categorie = sequelize.define('categorie', {

        //ALL TABLE'S COLUMN
        id: {
            type: DataTypes.INTEGER(11),
            allowNull: false,
            primaryKey: true,
            autoIncrement: true
        },
        Nom: {
            type: DataTypes.CHAR(50),
            allowNull: false
        }
    }, {
        tableName: 'categorie',
        timestamps: false,
        freezeTableName: true
    });

    //ASSOCIATION TO OTHER MODELS
    categorie.associate = (models) => {
        models.categorie.hasMany(models.produit, {foreignKey: 'id_CATEGORIE'})
    };

    return categorie;
};
