# TODO-PHP-092023

## Project Description:
The Simple To-Do List App is a user-friendly web application built with PHP (and some HTML and CSS too...). It allows users to:
- Add tasks
- View tasks
- Update tasks
- Delete tasks

The goal of the project is to practice PHP basics (like working with forms, sessions, and simple CRUD operations) and build a fully functional mini-app.

## Features:
- Add a new task
- Mark a task as completed
- Edit a task
- Delete a task
- Display tasks (all / completed / pending)
- Persist tasks using a file or database (for beginners: we can first use session storage)

## Tech Stack:
- **Front-end:** HTML, CSS (simple styling)
- **Back-end:** PHP (pure PHP, AdminLTE, no framework)
- **Database:** MySQL (later implementation)

## Goals:
- Practice PHP syntax
- Learn form handling and server-side logic
- Understand basic CRUD operations
- Build a clean, simple project that could be extended later

## Project Map:

/TODO-LIST-PHP
│
├── /assets
│   ├── /css
│   │    └── style.css         # Layout and component styling
│   ├── /js
│   │    └── script.js         # Optional interactivity (e.g., instant "mark as done")
│   └── /images
│        └── logo.png          # Branding or design assets
│
├── /includes
│   ├── header.php             # Head section + opening body
│   ├── footer.php             # Footer + closing body
│   └── navbar.php             # Filters: All / Completed / Pending
│
├── /config
│   └── config.php             # Database connection settings or file paths
│
├── /php
│   ├── taskManager.php        # Class to handle Task actions (add, edit, delete, list)
│   ├── traitement.php         # Handles incoming form requests, uses taskManager
│   └── helpers.php            # Helper functions (e.g., sanitize inputs)
│
├── index.php                   # Main UI for tasks
└── README.md                   # Documentation

