#!/usr/bin/env bash
set -ex
set -o pipefail

init() {
  composer init
}

install() {
  composer install
}

addTimerDep() {
  composer require phpunit/php-timer
}

test() {
  php tests/test.php
}

"$@"
