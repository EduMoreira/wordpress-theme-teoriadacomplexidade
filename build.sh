#!/usr/bin/env bash

gulp --production

rm -rf build
mkdir -p build
cp -R css img js fonts *.php *.css *.xml manifest.json build/

rm -f build.tar.gz
tar -zcvf build.tar.gz build