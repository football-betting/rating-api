# **Rating-Api**

---
###Setup project:
- please make sure to have amqp-1.11.0beta or higher installed locally
- `composer install`
- `docker-compose up -d`
- `bash init.sh`

---
###Before pushing:
- Execute following commands without getting any errors:
    - `php vendor/bin/phpunit`
    - `vendor/bin/infection --only-covered --min-msi=100`
    - `vendor/bin/psalm`

---

### Execute Command:
- to get all ratings from the European Championship
    - `bin/console football:ratings`
- to get only live ratings from the European Championship
    - `bin/console football:ratings --live`
    
---
###RabbitMq
- Start container:
    - `docker-compose start`
- Stop container:
    - `docker-compose start`
- Admin Panel:
    - http://localhost:15672
- Messenges are published to rabbitMq as Json:
```json
{"event":"rating.api","data":{"matchId":"TR-IT","team1":"TR","team2":"IT","homeTeamOdd":"1.2","awayTeamOdd":"3.4","drawOdd":"6.5"}}
```
