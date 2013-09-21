# Skeleteon for running Selenium IDE test cases on Travis

Selenium IDEで作ったテストケースをTravis CIで継続的インテグレーションする為のテスト。

# How to run test

## from command line

    vagrant up
    vagrant ssh
    /vagrant_data/SeleniumTest/build.sh

## from Selenium IDE

    vagrant up

open ./SeleniumTest/tests.html from Selenium IDE

# TODO

- nginx + php-fpm
- Vagrantfile
- テスト結果の見やすい整形