# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]
### Changed
- Core: Database component installer now publishes a `database.php` config.
- Database config removed from `app.php`

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
