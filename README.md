# Symfony CMF Standard Edition (improved) + FOSUserBundle

### You will need:
  * Git 1.6+
  * PHP 5.3.3+
  * php5-intl
  * phpunit 3.6+ (optional)
  * composer

## Inspired / improved from:

Original implementation: [https://github.com/symfony-cmf/symfony-cmf-standard](https://github.com/symfony-cmf/symfony-cmf-standard)

### We implement to CR storage types both using MySQL
  * PHPCR ODM
  * ORM

### Installation

1. Install composer and all dependencies

	curl -s http://getcomposer.org/installer | php --

2. Configure db parameters in parameters.yml

3. Setup DB - PHPCR ODM

	app/console doctrine:database:create
	app/console doctrine:phpcr:init:dbal
	app/console doctrine:phpcr:register-system-node-types
	app/console doctrine:phpcr:fixtures:load

4. Setup DB - ORM

	php app/console doctrine:schema:update --force

5. Only admin has access to create.js editing, so you would need to create a user and assign RULE_ADMIN to it.

Done.