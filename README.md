# PHP 8.2 Development Tools for WordPress Themes

This repository contains a set of development tools and configurations for WordPress theme development using PHP 8.2.

## Overview

This toolkit includes:

- PHP_CodeSniffer (PHPCS) with WordPress Coding Standards
- PHP CS Fixer
- Custom rulesets for maintaining code quality and consistency

## Requirements

- PHP 8.2
- Composer

## Installation

1. Clone this repository:
   ```
   git clone https://github.com/your-username/php74-dev-tools.git
   ```

2. Install dependencies:
   ```
   composer install
   ```

## Usage

### PHP_CodeSniffer (PHPCS)

To check your code against the defined standards:
```
composer phpcs
```

To fix code automatically:
```
composer phpcbf
```
### Ensure PHP CS Fixer is using this configuration:

1. Run PHP CS Fixer with the verbose flag to see what is happening:
```
   vendor/bin/php-cs-fixer fix --verbose
```

2. If you're still having issues, try clearing the PHP CS Fixer cache:

```
  vendor/bin/php-cs-fixer fix --clear-cache
```

3. If you're still having issues, try running PHP CS Fixer with the --dry-run flag to see what changes it would make:

```
   vendor/bin/php-cs-fixer fix --dry-run
```

4. Make sure you're running PHP CS Fixer from the same directory where your .php-cs-fixer.php file is located.

If you're still experiencing issues after these changes, it might be worth checking:
1. The version of PHP CS Fixer you're using (composer show friendsofphp/php-cs-fixer).
2. Any global PHP CS Fixer configurations that might be overriding your local settings.
3. Your IDE settings to ensure they're not automatically reformatting your code.

If the problem persists, please provide the output of the verbose `PHP CS Fixer` command and any error messages you're seeing. This will help in further diagnosing the issue.