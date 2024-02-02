<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Project

Title : Laravel-School

Description : small friday challenge task of making a school website.

## Goals

Task: Make a simple student registration on the school page where the admin can register students and see the entire list of students.

-   Student registration: Allow the Administrator to create accounts with basic data: first name, last name, e-mail. e-mail, password.
-   Login and logout: Provide the opportunity for the student to log in using the appropriate login data.
-   Allow the user to log out of the system.
-   Only the administrator can add a student and see the entire list of students.
-   Student list: Display the list of users with basic data (name, surname, e-mail).
-   Allow users to see only their account.
-   Data editing: Allow the user to edit their data (name, surname, e-mail).
-   Data deletion: Allow the user to delete his account. Additional function (optional): Implement the possibility to recover a forgotten password via e-mail. mail.
-   Style: Create a simple and clear user interface. Use CSS to make a proper design.
-   Security: Ensure that passwords are stored securely (hashing).
-   Additional feature (optional): Add a profile picture to be displayed in the user list.

## Quick start

1. Download ZIP or clone the repository

-   ![Screenshot](https://i.imgur.com/uqGgbuA.png)

2.  Assuming you've already installed:

-   [PHP](https://www.php.net/)
-   [Laravel](https://laravel.com/)
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org)

3. Navigate to project folder and Install dependencies

```
> composer install
> npm install
```

4. Copy the .env.example file in this directory to .env (which will be ignored by Git) by running the following commands:

```
cp .env.example .env
```

Populate the newly created .env file with your info

5. Generate an App key:

```
php artisan key:generate
```

6. Run development server:

```
npm run dev
```
