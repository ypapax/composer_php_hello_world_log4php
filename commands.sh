#!/usr/bin/env bash
set -ex
set -o pipefail

init() {
  composer init
}

up() {
  composer update
}

install() {
  composer install
}

addTimerDep() {
  composer require phpunit/php-timer
}

a() {
  #  https://stackoverflow.com/a/40706084/1024794
  composer dump-autoload
}

test() {
  install
  up
  a
  php tests/test.php
}

addlog4php() {
  composer require apache/log4php
}

"$@"
