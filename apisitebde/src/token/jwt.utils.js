const jwt = require('jsonwebtoken');
const JSON_PRIVATE_KEY = 'vGj*&qt2kJ457_tz3D6)M3:n7&k6t{#s69GL%n66=9APT_)yh5!u5*V28c88Dg~E£Q#|@]s<$uVte&W/+-G>Mq2GEUMqcvh52U-{{;:£2uVU8PAen~µiibsPJ4<2h:c4tvk&D6T4r,a926WtspR4M:ATS3Mxq*;T9[.)BHQxvCM>sLZ^.ucd498w:,8Pi3ux7^vep3Q&w873w^;D[2GZ9n+#9Wb$WZWUXK2LG@2t]Win?*VwN7-@£P#}>un$2b|-3hz433?!VH4X)6F4296v7N_$c7TC4{wNb,Ae2j4DQ8T?2E<37k3:8423B]R2P|Y€<6%tf.3y5D.@435N_?4^jXDJ£d5>6G4#g{6{Rv-2P;T(T7]6p4qcVXrdz45?*E>>mNDPVb;s6xjyAyEPxDQvc@/8^y>sic7P?%77,=;zYHB74CHQLuq5V_437j,B<Bb3362=qkVbw2rf5ujjWM/s%F)p3Y6fU9.6?QiTAb497>5(XW647nN2P5d.6€zMb6M3';

module.exports = {

    createUserToken: userData => {
        return jwt.sign({
            userId: userData.id,
            userRole: userData.id_ROLE
        }, JSON_PRIVATE_KEY)
    },

    parseAuthorisation: authorisation => {
        return (authorisation != null) ? authorisation.replace('Bearer ', '') : null;
    },
    getUserId: authorisation => {
        let userId = -1;
        let token = module.exports.parseAuthorisation(authorisation);
        if (token != null) {
            try {
                let jwtToken = jwt.verify(token, JSON_PRIVATE_KEY);
                if (jwtToken != null) {
                    userId = jwtToken.userId;
                }
            } catch (e) {

            }
        }
        return userId
    }

};
