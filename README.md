# Description

Béocler is a battery of speech assessments specifically designed for Creole-speaking children in Réunion Island. The aim of this project is to streamline the administration of these assessments by professional speech therapists through a web application.
It is a prototype application developed as part of the academic journey of the project's authors.

# Requirements

- PHP 8.0.26
- Composer
- Symfony CLI 6.0
- Web Server such as Apache or nginx
- MySQL 8.0.31
- phpMyAdmin 5.2.0
- MailHog (for email testing)

## Install the mail server MailHog
To send and receive emails from the project, you need to install a mail server on your local machine. One option is to use MailHog, which is a simple and lightweight mail server that can catch and display emails in a web interface. To install MailHog, follow these steps:

- 1. **Quick add - Windows user**
    Go to the [MailHog GitHub repository](https://github.com/mailhog/MailHog) and select le .exe file to execute it on your system.

- 1. **Other OS**
    Follow the instructions on the [MailHog GitHub repository](https://github.com/mailhog/MailHog) to download and install MailHog on your system.

- 2. Open your web browser and visit [http://localhost:8025](http://localhost:8025) to test the mail server. It's set ! 

# Installation

Next, you need to clone the projet repository from github using the following command:

```bash
git clone https://github.com/Alextmh/beocler.git
```
This will create a folder named beocler in your current directory.
1) Then enter into the projet

```bash
cd beocler
```
2) Install dependencies:
```bash
 composer install
```
3) Update the dependencies

```bash
composer update
```
4) Install database with the following command line

```bash
symfony console doctrine:database:create
```
5) Optionnal - Import some demo data into the database
   
An example ready-to-use database file, beocler.sql, is located in the migrations folder of the project. 
You can use phpMyAdmin to import the database file. To do that, follow these steps:

- Open phpMyAdmin in your browser and log in with your credentials.
- Click on the "New" button on the left sidebar to create a new database. Name it "beocler", and click on the Create button.
- Click on the database "beocler" on the left sidebar. Then, click on the Import tab on the top menu.
- Click on the Choose File button and select the beocler.sql file.
- Click on the Go button at the bottom of the page to start the import process.
  

# Launch the project
Finally, you need to run the project using the Symfony CLI tool. To do that, follow these steps:

- run the following command to start the Symfony web server:
```bash
symfony server:start -d
```
- You should see a message saying Symfony development server started: http://127.0.0.1:8000. This means that the project is running and you can access it by visiting [http://localhost:8000] in your browser.

- go to your web browser and visit
```bash
 http://localhost:8000 

```

That’s it! You have successfully set up and run the project.

# Authors

- [Pauline Moncoiffé-Brisset](https://github.com/paulinebrisset)
- [Beriche Chahalane](https://github.com/Beriche)
- [Julien Lenormand](https://github.com/Synepsy)
- [Alexandre Tam-Hui](https://github.com/Alextmh)
