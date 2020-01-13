#!/bin/bash
echo "Deploying stage kesatriakeyboard"

cd /home/kesatria/kesatriakeyboard \
&& git checkout master \
&& git pull \
&& composer install \
&& echo "kesatriakeyboard deployed successfully"