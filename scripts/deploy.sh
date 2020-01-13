#!/bin/bash
echo "Deploying stage kesatriakeyboard"
ssh -p 34512 -i ./deploy_key kesatria@hamzah.hideserver.net \
&& cd /home/kesatria/kesatriakeyboard \
&& git checkout master \
&& git pull \
&& composer install \
&& echo "kesatriakeyboard deployed successfully"