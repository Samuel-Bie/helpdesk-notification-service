
**Notification service installation**

  

**1. **Clone on github****

```sh

git  clone  https://github.com/Samuel-Bie/helpdesk-notification-service.git

```

  

**2. **Install the dependencies****

  

```bash

composer  install

```

**3. Configure  the queue driver**

To easy this process just copy the *.env.example* file to *.env*

  

**4. Spin up the containers**

```bash

./vendor/bin/sail  up

```
 After running this command the app be available on the port 1000. (Assuming that the configuration is the same as provide on the .env.example)

**5. Run the queue worker**

```bash

./vendor/bin/sail  artisan  queue:work

```
