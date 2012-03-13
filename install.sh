#!/bin/bash

echo "Installing in $@"
cp -r app/* "$@/app/"
echo "Done"
