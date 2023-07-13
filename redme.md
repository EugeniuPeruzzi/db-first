Snack 13/07/2023 sui database .

Id  --> INT 
Nome --> VARCHAR(15)
Cognome --> VARCHAR(30)
Sesso --> ENUM(M , F) // questo campo acceta solo i valori che vengono definiti
Data di nascita --> DATE *La data e limitata in base al database* //YEAR --> ha un range e pesa meno di un INT
Residenza/Domicilio --> VARCHAR()
Informazioni aggiuntive --> VARCHAR()
CAP(Codice Postale) --> VARCHAR() 
Recapito telefonico --> VARCHAR()
Email --> VARCHAR()
Metodo di pagamento --> VARCHAR() || ENUM(bonifico, paypal, postepay...ecc)

**Se non devo fare operazioni aritmetiche sui numeri utilizzo il `varchar()`**