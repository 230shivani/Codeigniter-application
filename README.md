This repository contains a full-stack web application with a **CodeIgniter 4** backend (PHP) and a **React** frontend (JavaScript). The backend provides a secure, flexible API and server-side logic, while the frontend delivers a modern, interactive user interface.

---

## Backend (`backend/`)

- **Framework:** [CodeIgniter 4](https://codeigniter.com/)
- **Location:** [`backend/`](backend/)
- **Features:**
  - RESTful API endpoints
  - Authentication & session management
  - MVC architecture (Controllers, Models, Views)
  - Configurable via `.env`
  - PHPUnit tests in [`backend/tests/`](backend/tests/)
- **Requirements:**
  - PHP 8.1+
  - Extensions: intl, mbstring, json, mysqlnd (for MySQL), libcurl (for CURLRequest)
- **Setup:**
  1. Copy `backend/env` to `backend/.env` and configure your environment (database, baseURL, etc).
  2. Install dependencies:
     ```sh
     cd backend
     composer install
     ```
  3. Configure your web server to point the document root to [public](http://_vscodecontentref_/0).

- **Run Tests:**
  ```sh
  cd backend
  vendor/bin/phpunit
  ```
cd frontend
npm install
npm start
npm run build
└── backend
    ├── .gitignore
    ├── LICENSE
    ├── README.md
    ├── app
        ├── .htaccess
        ├── Common.php
        ├── Config
        │   ├── App.php
        │   ├── Autoload.php
        │   ├── Boot
        │   │   ├── development.php
        │   │   ├── production.php
        │   │   └── testing.php
        │   ├── CURLRequest.php
        │   ├── Cache.php
        │   ├── Constants.php
        │   ├── ContentSecurityPolicy.php
        │   ├── Cookie.php
        │   ├── Cors.php
        │   ├── Database.php
        │   ├── DocTypes.php
        │   ├── Email.php
        │   ├── Encryption.php
        │   ├── Events.php
        │   ├── Exceptions.php
        │   ├── Feature.php
        │   ├── Filters.php
        │   ├── ForeignCharacters.php
        │   ├── Format.php
        │   ├── Generators.php
        │   ├── Honeypot.php
        │   ├── Images.php
        │   ├── Kint.php
        │   ├── Logger.php
        │   ├── Migrations.php
        │   ├── Mimes.php
        │   ├── Modules.php
        │   ├── Optimize.php
        │   ├── Pager.php
        │   ├── Paths.php
        │   ├── Publisher.php
        │   ├── Routes.php
        │   ├── Routing.php
        │   ├── Security.php
        │   ├── Services.php
        │   ├── Session.php
        │   ├── Toolbar.php
        │   ├── UserAgents.php
        │   ├── Validation.php
        │   └── View.php
        ├── Controllers
        │   ├── AuthController.php
        │   ├── BaseController.php
        │   ├── Home.php
        │   └── TeacherController.php
        ├── Database
        │   ├── Migrations
        │   │   ├── .gitkeep
        │   │   ├── 2025-09-03-044041_CreateAuthUserTable.php
        │   │   └── 2025-09-03-044042_CreateTeachersTable.php
        │   └── Seeds
        │   │   └── .gitkeep
        ├── Filters
        │   └── .gitkeep
        ├── Helpers
        │   └── .gitkeep
        ├── Language
        │   ├── .gitkeep
        │   └── en
        │   │   └── Validation.php
        ├── Libraries
        │   └── .gitkeep
        ├── Models
        │   ├── .gitkeep
        │   ├── AuthController.php
        │   ├── AuthUserModel.php
        │   └── TeacherModel.php
        ├── ThirdParty
        │   └── .gitkeep
        ├── Views
        │   ├── errors
        │   │   ├── cli
        │   │   │   ├── error_404.php
        │   │   │   ├── error_exception.php
        │   │   │   └── production.php
        │   │   └── html
        │   │   │   ├── debug.css
        │   │   │   ├── debug.js
        │   │   │   ├── error_400.php
        │   │   │   ├── error_404.php
        │   │   │   ├── error_exception.php
        │   │   │   └── production.php
        │   └── welcome_message.php
        └── index.html
    ├── builds
    ├── composer.json
    ├── composer.lock
    ├── phpunit.xml.dist
    ├── preload.php
    ├── public
        ├── .htaccess
        ├── favicon.ico
        ├── index.php
        └── robots.txt
    ├── spark
    ├── tests
        ├── .htaccess
        ├── README.md
        ├── _support
        │   ├── Database
        │   │   ├── Migrations
        │   │   │   └── 2020-02-22-222222_example_migration.php
        │   │   └── Seeds
        │   │   │   └── ExampleSeeder.php
        │   ├── Libraries
        │   │   └── ConfigReader.php
        │   └── Models
        │   │   └── ExampleModel.php
        ├── database
        │   └── ExampleDatabaseTest.php
        ├── index.html
        ├── session
        │   └── ExampleSessionTest.php
        └── unit
        │   └── HealthTest.php
    └── writable
        ├── .htaccess
        ├── cache
            └── index.html
        ├── debugbar
            └── index.html
        ├── index.html
        ├── logs
            └── index.html
        ├── session
            └── index.html
        └── uploads
            └── index.html
