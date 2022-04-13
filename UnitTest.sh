#!/bin/bash

cd tests

for file in *.php
do
   ../vendor/bin/phpunit ${file}
done
