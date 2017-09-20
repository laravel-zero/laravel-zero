# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]
### Added
- Core: Adds Scheduler.

### Changed
- Renamed base command `AbstractCommand` to `Command`.

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
