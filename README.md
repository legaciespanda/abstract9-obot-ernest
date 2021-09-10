<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Project

Using the default laravel UI, build a laravel application that requires admin to verify registered users before the registered users can login to the application. 

The application should fulfil the following  to 

- Admin should be able to login.
- Users should be able to register with basic information email is compulsory.
- Users should be informed that they will be logged in after the admin activates their account.
- Admin should be able to see all registered users and their registration status.
- Admin should be able to update the status of registered users. 
- Users with 'Active' status should be able to login to their account.
- Admin should be able to logout.

## Solution
### How It Works For Users
- User Registers a new account
- After registration, the user is informed that they will be logged in after the admin activates their account.
- If the user tries to login, the application will deny them access
- User account has to be activated by the admin, inorder to for the user to be able to login

### How It Works For Admin
- Admin can login and logout
- Admin can see all registered users and their registration status.
- Admin is able to update the status of registered users so the user can login.
- Admin can delete user's account

## Developed by Ernest Obot

