# Laravel Team Roles

Test project to investigate [jetstream with Livewire Teams](https://jetstream.laravel.com/2.x/installation.html) working
with the [spatie/laravel-permission](https://spatie.be/docs/laravel-permission/v5/introduction). By default in teams one
user has one role, I want to investigate multiple roles per user for the team they belong to.

Install and check [filament admin](https://filamentphp.com/docs/2.x/tables/installation) is working too.

## Local installation

### Requirements

This is a Laravel 9 project. The requirements are the same as a
new [Laravel 9 project](https://laravel.com/docs/9.x/installation).

- [8.0+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:

- [Git](https://git-scm.com/downloads)

### Clone

See [Cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a
local copy of this project on your computer.

e.g.

```sh
clone git@github.com:Pen-y-Fan/lara-team-roles.git
```

### Install

Install all the dependencies using composer

```sh
cd lara-team-roles
composer install
```

### Create .env

Create an `.env` file from `.env.example`

```shell script
cp .env.example .env
```

### Generate APP_KEY

Generate an APP_KEY using the artisan command

```shell script
php artisan key:generate
```

### Configure Laravel

Laravel is compatible with different database servers, MySQL is given as an example setup here, but there should be no
reason why this app wouldn't work on other Laravel supported SQL servers. I have not tested with other SQL servers.

This app uses migrations to generate the tables for the database. Tests will use factories for data. Configure the
Laravel **.env** file with the **database**, updating **username** and **password** as per you local setup.

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lara_team_roles
DB_USERNAME=YourDatabaseUserName
DB_PASSWORD=YourDatabaseUserPassword
```

### Create the database

The database will need to be manually created e.g. using MySQL:

```shell
mysql -u YourDatabaseUserName
CREATE DATABASE lara_team_roles CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
exit
```

### Migrate

```shell
php artisan migrate --seed
```

The migrations will run and providing the `.env` files **APP_ENV=local**, there will be an admin user with email
**admin@example.com** and password of **password** seeded and ready to log in.

## Jetstream

The Laravel Jetstream starter package has been installed which includes Livewire and Tailwind. This provides the
authentication for this package.

### Initial install

The first time the project is cloned the node packages will need to be installed

```shell
npm install
```

### dev watch

To develop the package run the watcher

```shell
npm run watch
```

## Launch

You can configure the app to open as you would any Laravel dev project, one of the easiest ways is to use artisan serve

```shell
php artisan serve
```

By default, the development server will be available on <http://127.0.0.1:8000>

Login with the seeded account:

- email: **admin@example.com**
- password: **password**

## Tooling

<!--
Development tooling has been provided to keep the package to a high standard, including tests, code standard (PSR-12 +
other standards), static analysis. Other tools like IDE helper help with auto-completion and debug bar helps identify
problems like N+1 issues and which route or blade is being using.

### Code standard

Easy Coding Standard (ECS) is used to check for style and code standards, [PSR-12](https://www.php-fig.org/psr/psr-12/)
is used. Regularly run code standard checks to automatically clean up your code. In particular run before committing any
code.

To make it easy to run Easy Coding Standard (ECS) a composer script has been created in **composer.json**. From the root
of the projects, run:

```shell script
composer check-cs
```

You should see the results:

```text
                                                                                                                        
 [OK] No errors found. Great job - your code is shiny in style!                                                         
                                                                                                                        
```

If there are any warning, ECS will advise you to run --fix to fix them, this also has a composer script:

```shell
composer fix-cs
```

Sometimes the fix command needs to be run several times, as one fix will identify more problems, keep running the fix-cs
until you get the OK message.

### Static analysis

PhpStan is used to run static analysis checks. Larastan has been installed, which is PhpStan and Laravel rules.
Regularly run static analysis checks to help identify problems. In particular run before committing any code.

To make it easy to run PhpStan a composer script has been created in **composer.json**. From the root of the projects,
run:

```shell script
composer check-cs
```

You should see the results:

```text
                                                                                                                        
 [OK] No errors                                                                                                         

```

If PhpStan identifies any problems then review and fix them one by one.

### Commit hook

[GrumPHP](https://github.com/phpro/grumphp) has been installed and configured to run a pre-commit hook, when you
`git commit` any code ECS, PhpStan and PHPUnit will be automatically run, if any of these fail the commit will be
rejected. You can always write a rule to bypass the failing code, but it is better to fix the problem.
-->

### Run tests

To make it easy to run all the PHPUnit tests a composer script has been created in **composer.json**. From the root of
the projects, run:

```shell script
composer tests
```

You should see the results in testDoc format:

```text
> phpunit --testdox
PHPUnit 9.5.19

Example (Tests\Unit\Example)
 ✔ That true is true

Api Token Permissions (Tests\Feature\ApiTokenPermissions)
 ↩ Api token permissions can be updated

Authentication (Tests\Feature\Authentication)
 ✔ Login screen can be rendered
 ✔ Users can authenticate using the login screen
 ✔ Users can not authenticate with invalid password

Browser Sessions (Tests\Feature\BrowserSessions)
 ✔ Other browser sessions can be logged out

Create Api Token (Tests\Feature\CreateApiToken)
 ↩ Api tokens can be created

Create Team (Tests\Feature\CreateTeam)
 ✔ Teams can be created

Delete Account (Tests\Feature\DeleteAccount)

Example (Tests\Feature\Example)
 ✔ The application returns a successful response

Invite Team Member (Tests\Feature\InviteTeamMember)
 ✔ Team members can be invited to team
 ✔ Team member invitations can be cancelled

Leave Team (Tests\Feature\LeaveTeam)
 ✔ Users can leave teams
 ✔ Team owners cant leave their own team

Password Confirmation (Tests\Feature\PasswordConfirmation)
 ✔ Confirm password screen can be rendered
 ✔ Password can be confirmed
 ✔ Password is not confirmed with invalid password

Password Reset (Tests\Feature\PasswordReset)
 ✔ Reset password link screen can be rendered
 ✔ Reset password link can be requested
 ✔ Reset password screen can be rendered
 ✔ Password can be reset with valid token

Profile Information (Tests\Feature\ProfileInformation)
 ✔ Current profile information is available
 ✔ Profile information can be updated

Registration (Tests\Feature\Registration)
 ✔ Registration screen can be rendered
 ↩ Registration screen cannot be rendered if support is disabled
 ✔ New users can register

Remove Team Member (Tests\Feature\RemoveTeamMember)
 ✔ Team members can be removed from teams
 ✔ Only team owner can remove team members

Two Factor Authentication Settings (Tests\Feature\TwoFactorAuthenticationSettings)
 ✔ Two factor authentication can be enabled
 ✔ Recovery codes can be regenerated
 ✔ Two factor authentication can be disabled

Update Password (Tests\Feature\UpdatePassword)
 ✔ Password can be updated
 ✔ Current password must be correct
 ✔ New passwords must match

Update Team Member Role (Tests\Feature\UpdateTeamMemberRole)
 ✔ Team member roles can be updated
 ✔ Only team owner can update team member roles

Update Team Name (Tests\Feature\UpdateTeamName)
 ✔ Team names can be updated

Time: 00:17.188, Memory: 56.00 MB

Summary of non-successful tests:

Api Token Permissions (Tests\Feature\ApiTokenPermissions)
 ↩ Api token permissions can be updated

Create Api Token (Tests\Feature\CreateApiToken)
 ↩ Api tokens can be created

Delete Api Token (Tests\Feature\DeleteApiToken)
 ↩ Api tokens can be deleted

Email Verification (Tests\Feature\EmailVerification)
 ↩ Email verification screen can be rendered
 ↩ Email can be verified
 ↩ Email can not verified with invalid hash

Registration (Tests\Feature\Registration)
 ↩ Registration screen cannot be rendered if support is disabled
OK, but incomplete, skipped, or risky tests!
Tests: 44, Assertions: 86, Skipped: 7.
....

Registration (Tests\Feature\Registration)
 ↩ Registration screen cannot be rendered if support is disabled
OK, but incomplete, skipped, or risky tests!
Tests: 35, Assertions: 73, Skipped: 7.
```

<!--
### Automatic PHPDocs

To help IDE autocompletion automatic PHPDocs for models are created using barryvdh/laravel-ide-helper, which has been
installed to help with IDE auto-completion, when new models are created run the following to auto generate doc blocks
for all the models:

```shell
php artisan ide-helper:models -W
```

Or for one specific model:

```shell
php artisan ide-helper:models -W "App\Models\Post" 
```
-->

## Contributing

This is a **personal project**. Contributions are **not** required. Anyone interested in developing this project are
welcome to fork or clone for your own use.

## Credits

- [Michael Pritchard \(AKA Pen-y-Fan\)](https://github.com/pen-y-fan).

## License

MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Policy info

Info on [policies](https://laravel.com/docs/9.x/authorization#authorizing-resource-controllers)

| Controller Method  | Policy  Method |
|:-------------------|:---------------|
| index              | viewAny        |
| show               | view           |
| create             | create         |
| store              | create         |
| edit               | update         |
| update             | update         |
| destroy            | delete         |

## TODO

- [ ] Install and configure tooling
    - [x] PHPUnit (included with Laravel)
    - [x] .editorconfig
    - [ ] Linting (Parallel Lint)
    - [ ] Static analysis (Larastan)
    - [ ] Code standard (ECS)
    - [ ] Commit hook (GrumPHP)
    - [ ] IDE Helper
    - [ ] Debugbar
- [x] Install [Jetstream and Livewire](https://jetstream.laravel.com/2.x/installation.html)
- [ ] Install [spatie / laravel permission](https://spatie.be/docs/laravel-permission/v5/introduction)
- [ ] Install and check filament admin is working.
- [ ] Add roles (admin, author, editor, viewer)
- [ ] Create Posts model with permission / role
    - [ ] index - everyone
    - [ ] show - everyone
    - [ ] create - admin & author
    - [ ] update - admin, author & editor
    - [ ] delete - admin & author
- [ ] reports
    - [ ] number of posts - everyone
    - [ ] my posts - everyone
    - [ ] deleted posts - admin (all) and author (own)
- [ ] site settings
    - [ ] admin
- [ ] experiment with multiple roles
