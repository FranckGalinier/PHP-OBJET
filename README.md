# DockerCompose
Script complet docker compose LAMP
Paramétrage a faire pour le fonctionnement :   
dans docker-compose.yml  
changer MYSQL_ROOT_PASSWORD pour la valeur de votre choix   
changer MYSQL_PASSWORD pour la valeur de votre choix   

dans db/backup.sh et db/restore.sh

changer ValeurDeVotreChoix par le mot de passe root de mariadb

# Utilisation

Clôner le dépot  

mettre la BDD au format sql dans db/ et l'appeller init.sql
mettre les données web dans www/  
Changer les valeurs de connexion a la bdd mariadb ( serveur : mariadb pour le reste voir docker-compose.yml ) 
lancer avec ```docker compose up -d```  
lancer ensuite ```ìnitbdd.sh```



# PHP OBJET
Premier cours php objet
