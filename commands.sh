#!/usr/bin/env bash
set -ex
set -o pipefail

init() {
  composer init
}

install() {
  composer install
}

"$@"
