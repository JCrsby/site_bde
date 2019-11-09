---
**MINI API** 
===
version : ```1.0.0``` ```under development```

last patch ```09/11/2019 02:05```

created by ```bolex222```

**SORRY UNUSABLE API BECAUSE UNDER DEVELOPMENT**

---

what is it ?
---

this is a little testing api for basile's group member which permit to test :

- ```http``` request (it will response a constant json for each routes)

- ```token``` authentication (for the login http request )

- some other functionality will probably arrived
---

How to use ?
---
1. download folder miniApi https://github.com/JCrsby/site_bde/tree/miniApi/miniApi 
2. install node https://nodejs.org
3. open terminal in the folder miniApi
4. run command : ```npm install``` it will download all dependencies
5. run command : ```node api.js``` or ```nodemon api.js``` if you want to modify the api https://www.npmjs.com/package/nodemon

**/!\ free to edit MINI API  BUT please don't commit or push it in the github /!\ .** 




---



current functionality : 
---

HTTP REQUEST : 


POST : 
1.  ```localhost:3000/api/user/login``` 
    will response a JSON with all users imformation + a token
    
    json example : 
    ```
        {
        "token": "SUPERTOKENEXEMPLE",
        "user": {
                 "username": "dutrouc",
                 "firstname": "stephane",
                 "email": "exemple@email.com"
                 "idRole": "admin"
                }
        }
    ```
2. ````localhost:3000/api/user/checktoken```` will response JSON which validate the token or note 

    json examples : 
    ```
        {"validate": "good token"}
            or
        {"error": "bad token"}
    ```
   
   
