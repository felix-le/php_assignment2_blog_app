# PHP Assignment 1

This project was built by PHP with

- [bootstrap 4](https://getbootstrap.com/docs/4.0/getting-started/introduction/) by [Felix Le](http://felixle.net/)
- [Scss - PHP](https://github.com/infostreams/scss-php)

- account: userName, userEmail, password, superAdmin

'super', 'mc.vietanh@gmail.com', '1', true
'user', 'user@gmail.com', '1', false

## Available script

In the the project directory, you have to do by steps:

1. Copy all of the folders into htdocs (for Mamp) or Xampp (for windows)
2. Turn on your apache + mysql server in mamp / xampp;
3. access to url: localhost/php_assignment1

### A beta of CMS for blog post

### Features

1. Login

2. register

- Confirm email
- Google sign in

3. Create pages - public pages / private pages

4. Create posts in pages - public posts / private posts

### Requirements

1. Using HTML, PHP, SQL, SCSS, Bootstrap
2. Passwords must be hashed
3. All inputs must be validated.
4. Usernames should be validated as properly-formatted email addresses.
5. 2 users cannot sign up with the same email address
6. Login, logout
7. Super admin can:

- edit / add / delete with a confirmation message (using bootstrap modals).

8. users can

- list / add / edit / delete web pages in their database.

### Pages

- Login
- Register
- Profile user
- upload avatar
- Show all users (super admin)
- Show all pages (users)
- 404 error
- general error (database error)

- Home
- About
- Services
- Contact

\*Bug:

- Cannot hash password in validateRegister.php

### Tasks:

1. Setting for using SCSS in PHP project. - done
2. create Login pages, a public page, a private page. - done
3. Authentication: Super admin (control users + pages), admin (control pages); - done

- Create admin + super admin - done

4. 404 page
   4.1 error pages

5. Upload logo image
6. create profile page + upload avatar, edit name, change password.
7. all pages - page (add/remove/edit page) /

- show modal before removing
- edit content box
- edit page by sub-links (index.php?id=1)

8. All administrators (super admin) (add/remove/edit addmin)

- edit user's profile
