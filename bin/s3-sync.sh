#!bin/sh
aws s3 sync --region "$AWS_DEFAULT_REGION" src "s3://$AWS_BUCKET"
