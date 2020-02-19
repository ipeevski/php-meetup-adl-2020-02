---
marp: true
---

## Static Code Analysis

https://github.com/exakat/php-static-analysis-tools

## Static Application Security Testing (SAST)

## Dynamic Application Security Testing (DAST)

---
# Setup
Run local composer tools

---

# Linting

## Install
composer require --dev jakub-onderka/php-parallel-lint

## Run
```
parallel-lint src/
```

---

# Copy / Paste Detection

## Install
```
composer require --dev sebastian/phpcpd
```

## Run

```
phpcpd src
```

---

# [Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer)

## Install
via composer
```
composer require --dev squizlabs/php_codesniffer
```

## Run
```
# PSR-2 rules
phpcs --standard=PSR2 src/*
# Custom rules
phpcs --standard=misc/phpcs.xml --parallel=4 src/*
```

Fix all the things
```
phpcbf --standard=misc/phpcs.xml src/*
```
---

phpcsfixer

Install
via composer
```
composer require --dev friendsofphp/php-cs-fixe
```

Fix all the things (again)
```
vendor/bin/php-cs-fixer --config=misc/phpcsfixer.php fix --dry-run
```


---

composer require --dev phan/phan

PHAN_DISABLE_XDEBUG_WARN=1 vendor/bin/phan --allow-polyfill-parser --config-file=misc/phan.php --output-mode=text

---

composer require --dev phpmd/phpmd

vendor/bin/phpmd src text misc/phpmd.xml

---

composer require --dev povils/phpmnd

vendor/bin/phpmnd src --ignore-numbers=0,1 --no-interaction --non-zero-exit-on-violation --extensions=all

---

composer require --dev phpstan/phpstan

vendor/bin/phpstan analyse --configuration misc/phpstan.neon --no-progress

---

composer require --dev vimeo/psalm

vendor/bin/psalm -c misc/psalm.xml --show-info=false --threads=4

---

composer require --dev sensiolabs/security-checker

vendor/bin/security-checker security:check

---

composer require --dev sebastian/phpcpd

vendor/bin/phpcpd src

---

composer require --dev phpmetrics/phpmetrics

vendor/bin/phpmetrics --report-html=tmp/phpmetrics src

---
GrumPhp monitoring

## Install
```
composer require --dev phpro/grumphp
```

---
# CI pipelines
GitHub Actions
https://github.com/ipeevski/php-meetup-adl-2020-02/actions
