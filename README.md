**** CareWatch ****

~ Vereisten:
~ Om deze demo omgeving te gebruiken is een PHP server nodig.
~ Chrome browser
Voor het instelllen van de DEMO moet je dit project draaien op een webserver.
Maak een nieuwe database aan en importeer dan: u12893p9221_carew_171211_met _data.sql.
In bijv. Php MY admin moet je dan een nieuwe user voor privilegen aanmaken en de gegevens invullen in het document: /php/dbhinc/php
Gebruik een enable cross origin recourse sharing plugin voor Chrome!

Test Gebruiker:
a.brown@hotmail.com
wachtwoord: 987654


~ Website Structuur:
  index.php                     = inlog.css
    registration_user.PHP       = registration_user.css
    user.php                    = user.css
      medicalreminder.html      = medicalreminder.css
      schedule.html             = schedule.css
      sensor.html               = sensor.css
    alarminlog.html             = alarminlog.css
      alarmlandingpage.html     = alarmlandingpage.css
      alarm.html                = alarm.css
    team.html                   = team.css

~ Registratie pagina.
    User moet eerst registreren voordat hij kan inloggen
    Na registratie wordt in de database alle informatie gechecked, mocht de email adres er al instaan wordt dat gemeld
    anders wordt het in de database gezet

~ User login.
    Als het in de database staat kan de user inloggen waarbij hij meerder functies kan selecteren en verschillen sensoren die de gebruiker kan instellen.
    Functies:
        ~ Informatie
        ~ Agenda
        ~ Medical ( Medicijnen, artsen e.d )
        ~ Reminders
    Sensoren:
        ~ Heartbeat
        ~ Temprature
        ~ Knop op raspberry pi
        ( Andere sensoren kunnen eventueel toegevoegd worden)

~ Alarmcentrale Login
    Alarm centrale zal moeten inloggen met extra beveiliging door middel van een pincode
    Mocht de alarm centrale medewerker ingelogd zijn heeft deze toegang tot alle users.
    Als de user dan op een knop drukt op zijn/haar watch gaat er door middel van een API een bericht naar de database
    intussen staat een stukje ajax constant te vragen of er wat is, komt er dan iets binnen dan komt dit terecht op het alarm landing page.
    Ook heeft deze toegang tot het inzien van geschiedenis betreffende alarm meldingen en ingestelde sensoren

    php bestand: statetest.php
    Dit bestand bevat de eerste poging om een functie te maken die de status van alarmen aanpast naarmate erop geklikt is.
    Elk alarm wordt gestuurd d.m.v een JSON:
    De state in de json houdt de status van het alarm in.
    1= new
    2= seen
    3= busy
    4= solved

~ Database
    Hier wordt de  volgende data opgeslagen na registratie van de user
    Eerst wordt er een id gegenereert, dan wordt de data opgeslagen in de naw gegegvens
        ~ Voornaam
        ~ Achternaam
        ~ Adres
        ~ Username
        ~ Wachtwoord
        ~ En andere eventuele informatie

~ Raspberry PI
    In de python scripts staat beschreven wat iedere functie doet
    Ook is ingesteld dat bepaalde script opstarten als de raspberry is opgestart
            etc/rclocal <- verschilt per device en beschrijving hiervan is makkelijk te vinden

Eventuele link om een launcher te creeren.
http://www.instructables.com/id/Raspberry-Pi-Launch-Python-script-on-startup/
