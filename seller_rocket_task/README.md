SETUP
   1. Start Xampp with Apache and Mysql
   2. Upload the files to htdocs inside the project named folder
   3. Inside the db seller_rocket_task run this query
        CREATE TABLE contact(
        	id int not null AUTO_INCREMENT PRIMARY KEY,
            created_at timestamp DEFAULT CURRENT_TIMESTAMP,
            name text,
            phone text,
            email text,
            platform text,
            message text
        );
    4. See the Project in localhost/seller_rocket_tech
    5. Access the website

Tech Stack
    1. Html
    2. Css
    3. Js
    4. Bootstrap
    5. Php
    6. Mysql

I have completed the project with home, services, contact menus and also with admin menu to see the admin panel.
