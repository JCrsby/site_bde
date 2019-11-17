/* jshint indent: 1 */
//MODEL CATEGORIES
module.exports = function (sequelize, DataTypes) {
    const categorie = sequelize.define('categorie', {

            //ALL TABLE'S COLUMN
            'id_CATEGORIE': {
                type: DataTypes.INTEGER(11),
                allowNull: false,
                primaryKey: true,
                primaryKey: true,
                comment: "null",
                autoIncrement: true
            },
            'Nom': {
                type: DataTypes.CHAR(50),
                allowNull: false,
                comment: "null"
            }
        },
        {
            tableName: 'categorie'
        }
    );

    //ASSOCIATION TO OTHER MODELS
    categorie.associate = (models) => {
        models.categorie.hasMany(models.produit, {foreignKey: 'id_CATEGORIE'})
    };

    return categorie;
};
