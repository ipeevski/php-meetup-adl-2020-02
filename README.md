---
marp: true
theme: gaia
---

# Static Code Analysis
## Tools and Tricks
#### by Ivan Peevski (Personify Care)
![Personify Care](https://app.personifycare.com/images/personifycare_logo_footer.png)

---
## Static Code Analysis

## Static Application Security Testing (SAST)

## Dynamic Application Security Testing (DAST)

---
# Setup

Install tools through composer

---
# Linting

Make sure PHP code can be parsed

## Install
```
composer require --dev jakub-onderka/php-parallel-lint
```

## Run
```
vendor/bin/parallel-lint src
```

---
# [Copy / Paste Detection](https://github.com/sebastianbergmann/phpcpd)

## Install
```
composer require --dev sebastian/phpcpd
```

## Run
```
vendor/bin/phpcpd --min-tokens=5 src
```

---
# [Magic Number Detection](https://github.com/povils/phpmnd)

Detect magic numbers AND strings

## Install
```
composer require --dev povils/phpmnd
```

## Run
```
vendor/bin/phpmnd src --no-interaction --non-zero-exit-on-violation --extensions=all
```

---
# [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer)

## Install
via composer
```
composer require --dev squizlabs/php_codesniffer
```

## Run
```
# PSR-2 rules
vendor/bin/phpcs --standard=PSR2 src/*
# Custom rules
vendor/bin/phpcs --standard=misc/phpcs.xml --parallel=4 src/*
```

Fix all the things
```
vendor/bin/phpcbf --standard=misc/phpcs.xml src/*
```
---
# [phpcsfixer](https://cs.symfony.com/) (by Symfony)

## Install
via composer
```
composer require --dev friendsofphp/php-cs-fixer
```

## Fix all the things (again)
```
vendor/bin/php-cs-fixer --config=misc/phpcsfixer.php fix --dry-run
```

---
# [PHP Mess Detector](https://phpmd.org/)

## Install
via composer
```
composer require --dev phpmd/phpmd
```

## Run
```
# Base test
vendor/bin/phpmd src text cleancode,codesize,design,naming,unusedcode
# Custom rules
vendor/bin/phpmd src text misc/phpmd.xml
```

---
# [Phan](https://github.com/phan/phan/wiki)

## Install
via composer
```
composer require --dev phan/phan
```

## Run
```
PHAN_DISABLE_XDEBUG_WARN=1 vendor/bin/phan --allow-polyfill-parser --config-file=misc/phan.php --output-mode=text --color
```

---
# [PHP Static Analysis Tool (phpstan)](https://github.com/phpstan/phpstan)

## Install
via composer
```
composer require --dev phpstan/phpstan
```

## Run
```
vendor/bin/phpstan analyse --configuration misc/phpstan.neon --no-progress
```

---
# [Psalm](https://psalm.dev/) (by Vimeo)

## Install
via composer
```
composer require --dev vimeo/psalm
```

## Run
```
vendor/bin/psalm -c misc/psalm.xml --show-info=false --threads=4
```
---
# [Composer Library Security](https://security.symfony.com/) (by Symfony)

## Install
via composer
```
composer require --dev sensiolabs/security-checker
```

## Run
```
vendor/bin/security-checker security:check
```

---
# [Code Metrics](https://phpmetrics.org/)

## Install
via composer
```
composer require --dev phpmetrics/phpmetrics
```

## Run
```
vendor/bin/phpmetrics --report-html=tmp/phpmetrics src
```

---
# More Tools

List of tools:
- https://github.com/exakat/php-static-analysis-tools
- https://owasp.org/www-community/Source_Code_Analysis_Tools

Commercial tools:
- https://www.sonarsource.com/products/codeanalyzers/sonarphp.html
- https://www.exakat.io/
- https://www.ripstech.com/

---
# [GrumPhp](https://github.com/phpro/grumphp) Checking Git Commits

## Install
```
composer require --dev phpro/grumphp
```

## Run
Automatically checks on git commit

---
# CI pipelines

[GitHub Actions](https://github.com/features/actions)

https://github.com/ipeevski/php-meetup-adl-2020-02/actions
