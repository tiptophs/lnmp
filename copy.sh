#!/bin/bash

rm -rf .env
rm -rf docker-compose.yml

cp env.sample.conf .env
cp docker-compose.sample.yml docker-compose.yml