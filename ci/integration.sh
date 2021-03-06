#!/bin/sh
set -e -x
export APP_DIR="/usr/src/app"
ci_dir="$APP_DIR/plugin/ci"
export SCRIPTS_DIR="$ci_dir/scripts"
sh "$SCRIPTS_DIR/setup.sh"
sudo -E -u www-data -H bash "$SCRIPTS_DIR/laravel.sh"
cd "$APP_DIR/integration"
sudo -E -u www-data -H bash "$SCRIPTS_DIR/integration.sh"
sudo -E -u www-data -H bash "$SCRIPTS_DIR/integration-test.sh"
