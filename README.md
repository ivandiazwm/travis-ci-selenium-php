# Skeleteon for running Selenium IDE test cases on Travis

PHPUnit + Selenium on Travis CI templates.

[![Build Status](https://travis-ci.org/yandod/travis-ci-selenium-php.png?branch=master)](https://travis-ci.org/yandod/travis-ci-selenium-php)

# How to run test locally.

## from command line

    vagrant up
    vagrant ssh
    Xvfb :99 -ac &
    DISPLAY=:99 java -jar selenium-server-standalone-2.31.0.jar
    phpunit SeleniumTest

# TODO

- nginx + php-fpm on Travis.
- Vagrantfile
