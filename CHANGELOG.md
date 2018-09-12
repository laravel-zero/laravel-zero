# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]
## [Unreleased]
### Adds
- Database component now adds the `make:model` command.
- Mockery as dev-dependency.

### Changes
- Internal behavior of build feature. Using "humbug/box" to provide fast application bundling.
- Option `with-dev` on the command `app:build` got removed.
- Internal framework classes may not available for inheritance.
- Internal framework structure main contain some changes, e.g: `Commands/App/Builder::class` got moved to `Commands\BuildCommand::class`
- Removed return type from `Command::handle()`.
- Removed return type from `Command::schedule()`.

### Fixes
- Removes seed command from production commands.
- `.env` are no longer included in builds.

## [5.6.19] - 2018-05-28
### Fixes
- Create project cmd.

## [5.6.18] - 2018-05-27
### Adds
- Method injection on handle method in command classes. [#242](https://github.com/laravel-zero/framework/pull/242)

## [5.6.17] - 2018-05-08
### Adds
- Console Dusk component.

### Changes
- Use semver caret operator on composer.
- Updates Renamer and Builder commands descriptions.

## [5.6.16] - 2018-03-26
### Fixed
- Usage of package auto-discovery in unwanted cases.

## [5.6.15] - 2018-03-26
### Fixed
- Revert: Fixes the register of auto discovery service providers.

## [5.6.14] - 2018-03-26
### Fixed
- Fixes the register of auto discovery service providers.

## [5.6.13] - 2018-03-25
### Fixed
- Registers console commands if component is available.

## [5.6.12] - 2018-03-25
### Fixed
- Fixes console stub identation. [#235](https://github.com/laravel-zero/framework/pull/235)

## [5.6.11] - 2018-03-21
### Removed
- Package `symfony/thanks`. [#138](https://github.com/laravel-zero/laravel-zero/pull/138)

## [5.6.9] - 2018-03-07
### Adds
- Alternative component installer on windows.

## [5.6.8] - 2018-03-07
### Fixes
- Create project on Windows.

## [5.6.7] - 2018-03-04
### Fixes
- `file in use` error on Windows. [#222](https://github.com/laravel-zero/framework/pull/222)

## [5.6.6] - 2018-03-04
### Added
- `app:build` command now haves the option `with-dev` to compile with dev dependencies.

## [5.6.5] - 2018-03-04
### Fixes
- Fixes unwanted first line appearance on compiled file.

## [5.6.4] - 2018-03-03
### Changes
- Improves `app:build` command. [#211](https://github.com/laravel-zero/framework/pull/211)

## [5.6.3] - 2018-02-20
### Fixed
- Phpdocs

## [5.6.2] - 2018-02-19
### Fixed
- Fixes environment detector

## [5.6.1] - 2018-02-18
### Fixed
- Composer.json framework value.

## [5.6.0] - 2018-02-18
### Added
- Added `config/commands.php` to hold the ListCommand configuration.
- Added `bootstrap/cache` folder to hold application services cache.
- Core: Added `menu` method on base command class.
- Core: Collision v2

### Changed
- On tests, the `Integration` folder got renamed to `Feature`.
- The value version on `config/app.php` should be updated to `app('git.version')`.

### Removed
- `bootstrap/autoload` and `bootstrap/init` got removed.
- App config `with-scheduler` is no longer available. You should use `config/commands.php` for it.
- App config `default-command` is no longer available. You should use `config/commands.php` for it.
- App config `commands-paths` is no longer available. You should use `config/commands.php` for it.
- App config `commandss` is no longer available. You should use `config/commands.php` for it.
- Database config `with-migrations` is no longer available. You should use `config/commands.php` for it.
- Database config `with-seeds` is no longer available. You should use `config/commands.php` for it.

## [4.0.26] - 2018-02-01
### Fixes
- Core: Fixes usage of facades in service providers.

## [4.0.25] - 2018-01-12
### Fixes
- Core: Respects Service Provider Lifecycle.

## [4.0.24] - 2018-01-10
### Fixes
- Core: Fixes bug on case sensative filesystems.

## [4.0.23] - 2018-01-10
### Fixes
- Core: Removes `make` related commands from production env.

## [4.0.22] - 2018-01-09
### Added
- Core: Adds dotenv component.

## [4.0.21] - 2018-01-05
### Added
- Core: Helpers `abort`, `abort_if` and `abort_unless`.

### Changed
- Core: Symfony console exceptions are not captured by Collision.

## [4.0.20] - 2018-01-05
### Fixed
- Core: `task` method on command class now returns the result of the task.
- Core: Command Renamer now works on windows.
- Core: `database.php` `with-*` properties are now by default true if missing.

## [4.0.19] - 2018-01-03
### Fixed
- Core: Directory separator used on core binds and core constants.

## [4.0.18] - 2018-01-01
### Changed
- Core: Refactor integration tests. [#126](https://github.com/laravel-zero/framework/pull/126)

## [4.0.17] - 2018-01-01
### Changed
- More clear integration test example. [#102](https://github.com/laravel-zero/laravel-zero/pull/102)

## [4.0.16] - 2017-12-14
### Fixed
- Core: Fixes command build with namespace reading from composer.json.

## [4.0.15] - 2017-12-13
### Fixed
- Core: Namespace is now found from composer.json.

## [4.0.14] - 2017-12-13
### Fixed
- Core: Scheduler working with PHAR buids. [#115](https://github.com/laravel-zero/framework/pull/115)

## [4.0.12] - 2017-12-06
### Added
- Core: Adds `task` method on command class.
- Core: Adds log component.
- Core: Adds seeds related commands.
- New database.php configuration `with-seeds => true`.

## [4.0.10] - 2017-11-28

### Fixed

- Core: Fixes build on Mac/Linux.

## [4.0.9] - 2017-11-27

### Fixed

- Core: Fixes build on Windows. [#102](https://github.com/laravel-zero/framework/pull/102)

## [4.0.8] - 2017-11-22

### Changed

- Core: Disables `Collision` on production.

## [4.0.4] - 2017-11-14

### Fixed

- Core: Fixes commands detector.
- On the config/app.php the config `commands-namespaces` was replaced by `commands-paths`.

## [4.0.2] - 2017-11-11

### Fixed

- Core: Fixes missing `league/flysystem` package.

## [4.0.0] - 2017-11-08

### Added
- Core: All configs are auto detected.
- Core: `nunomaduro/collision` added on require section of composer.
- Core: Database component installer now publishes a `database.php` config.
- Core: Improves builder & renamer command signature.
- Core: Adds `with-scheduler` config option.
- Core: Adds `command:make` feature.
- Core: Adds support to `Storage` facade & Flysystem.
- `config/app.php` added containing now only app config.

### Changed
- The file `config/config.php` was removed.

### Removed
- `nunomaduro/collision` removed from composer.json.

## [3.10.0] - 2017-11-01
### Changed
- Uses symfony default command by default.

## [3.9.2] - 2017-10-26
### Added
- Core: Auto-detect commands.
- Removes commands entry from `config.php`.

## [3.9.0] - 2017-10-25
### Added
- Core: Moves cache config exists now by default on core.
- Core: Fixes bug on renamer if the file with the same name already exists.
- Cache config remove from `config.php`.

## [3.8.0] - 2017-10-20
### Added
- Requires from composer Laravel Zero Framework `3.8.*`.
- Moves Collision from composer `require-dev` to `require`.
- Adds option `with-migrations` to database config.
- Core: Migrations feature.

## [3.7.0] - 2017-10-12
### Added
- Adds Collision to composer `require-dev`.
- Adds Collision listener to `phpunit.xml`.
- Core: Auto registers collision.

## [3.6.11] - 2017-10-01
### Added
- Core: Adds `config_path` helper.

## [3.6.8] - 2017-09-28
### Added
- Adds composer lock.

## [3.6.5] - 2017-09-24
### Added
- Core: Adds output global helpers.

## [3.6] - 2017-09-21
### Added
- Core: Adds Scheduler.
- Core: Adds Facades.
- Core: Adds `illuminate/filesystem` component

### Changed
- Renamed base command `AbstractCommand` to `Command`.
- Cache config added to `config.php`.

### Removed
- Core: Removes `illuminate/cache` component. It's now by default.

## [3.5.4] - 2017-09-17
### Added
- [Installer](https://github.com/laravel-zero/installer)

## [3.5.0] - 2017-09-12
### Added
- Core: Adds `illuminate/filesystem` component.
- Core: Adds `illuminate/cache` component.
- Renames default command to `Hello command`.

## [3.4.0] - 2017-09-04
### Added
- Core: Bumps Laravel components version to 5.5.

## [3.3.0] - 2017-08-27
### Added
- Core: Core commands are not available in production by production. [#29](https://github.com/nunomaduro/laravel-zero/pull/29)
- Core: Adds component:install command.
- Core: Adds illuminate/database component.

## [3.2.0] - 2017-08-22
### Added
- Core: Adds the executable bit on the compiled standalone phar on the builder command.
- Core: Add shebang on the builder command.

## [3.1.0] - 2017-07-21
### Changed
- Core: Fixes bootstrap of service providers

## [3.1.0] - 2017-07-21
### Changed
- Core: Fixes bootstrap of service providers

## [3.0.5] - 2017-07-19
### Changed
- Core: Fixes bind of app container

## [3.0.0] - 2017-07-16
### Added
- Splits core framework from the project.

## [2.0.13] - 2017-07-02
### Fixed
- Fixes application build [#18](https://github.com/nunomaduro/laravel-zero/issues/18)

## [2.0.11] - 2017-06-28
### Changed
- Updates project struture

## [2.0.0] - 2017-06-21
### Added
- Adds support to desktop notifications
- Adds better docs

## [1.6.0] - 2017-06-11
### Added
- Adds format "Keep a Changelog"

## [1.5.0] - 2017-06-11
### Added
- Adds IOC automatic resolution on commands `__construct`

## [1.3.0] - 2017-04-16
### Added
- Adds better error handling
- Adds base abstract layer between you app commands and laravel commands
- Adds feature `Performance analyser`

## [1.0.0] - 2017-03-27
### Added
- First stable version
