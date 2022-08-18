# Changelog

## [v3.0.3]

### Fixed

- Repeater transform (is different to standard group transform and therefore had to be implemented inside Repeater.php)

## [v3.0.2]

- added getter for wrapper group on FieldGroup

## [v3.0.1]

### Changed

- removed build methods from Fields (and use $args for default parameters instead)

### Added

- proper type hints

## [v3.0.0]

### Added

- BaseParentField to be extended by ACF fields that have sub_fields (enable recursive build and transform)
- ACF Layout field (usage of BaseSection is deprecated)
- Full support for builder pattern on BaseField for common configurations

### Changed

- Add ACF registration parameters to BaseField constructor (passing those via the build method is deprecated)
- Namespace of this package 
- FieldGroup such that it uses a wrapper group internally to wrap its sub fields

## [v2.2.0] - 17.02.2022

### Added

- `FlexibleContent` field

## [v2.1.0] - 02.02.2022

### Added

- `TimePicker`-field for ACF
- `Checkbox`-field for ACF

## [v2.0.1] - 26.02.2022

## Fixed

- namespace of AcfWpmlHelper.php

## [v2.0.0] - [Release Notes](./docs/release-notes/v2.0.0.md) - 21.01.2022

### Added

- enabled translation of towa acf base fields
- added missing clone field

### Removed

- unused/irrelevant comments
- `UseH1` module

## [v1.1.1] - 17.12.2019

### Fixed

- missing return statement for completing the fluent-interface-design

## [v1.1.0]

### Added

- field buttongroup

## [1.0.3]

### Updated

- package name for composer

## [1.0.2]

### Removed

- version tag from composer, so packagist can resolve tags

## [1.0.1]

### Moved

- from bitbucket to github ( going opensource :muscle: :heart_eyes: )

[v3.0.3]: https://github.com/digit-one-dev/d1-acf-fields/releases/tag/v3.0.3
[v3.0.2]: https://github.com/digit-one-dev/d1-acf-fields/releases/tag/v3.0.2
[v3.0.1]: https://github.com/digit-one-dev/d1-acf-fields/releases/tag/v3.0.1
[v3.0.0]: https://github.com/digit-one-dev/d1-acf-fields/releases/tag/v3.0.0
[v2.2.0]: https://github.com/towa-digital/towa-acf-fields/releases/tag/v2.2.0
[v2.1.0]: https://github.com/towa-digital/towa-acf-fields/releases/tag/v2.1.0
[v2.0.1]: https://github.com/towa-digital/towa-acf-fields/releases/tag/v2.0.1
[v2.0.0]: https://github.com/towa-digital/towa-acf-fields/releases/tag/v2.0.0
[v1.1.1]: https://github.com/towa-digital/towa-acf-fields/releases/tag/v1.1.1
[v1.1.0]: https://github.com/towa-digital/towa-acf-fields/releases/tag/v1.1.0
[1.0.3]: https://github.com/towa-digital/towa-acf-fields/releases/tag/1.0.3
[1.0.2]: https://github.com/towa-digital/towa-acf-fields/releases/tag/1.0.2
[1.0.1]: https://github.com/towa-digital/towa-acf-fields/releases/tag/1.0.1
[1.0.0]: https://github.com/towa-digital/towa-acf-fields/releases/tag/1.0.0
[unreleased]: https://github.com/towa-digital/towa-acf-fields/tree/develop
