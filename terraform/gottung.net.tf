variable "aws_account_id" {
  description = "The AWS account ID"
}

# Defined in the nlsmith.com repo
# resource "aws_iam_user" "www"
# resource "aws_iam_user_policy" "www"

resource "aws_s3_bucket" "www" {
  bucket = "gottung.net"
  acl    = "public-read"

  website {
    index_document = "index.html"
    error_document = "404.html"
  }

  policy = <<EOF
{
  "Statement": [
    {
      "Effect": "Allow",
      "Principal": {
        "AWS": [
          "*"
        ]
      },
      "Resource": "arn:aws:s3:::gottung.net/*",
      "Action": "s3:GetObject"
    },
    {
      "Effect": "Allow",
      "Principal": {
        "AWS": "arn:aws:iam::${var.aws_account_id}:user/www"
      },
      "Resource": "arn:aws:s3:::gottung.net",
      "Action": "s3:*"
    },
    {
      "Effect": "Allow",
      "Principal": {
        "AWS": "arn:aws:iam::${var.aws_account_id}:user/www"
      },
      "Resource": "arn:aws:s3:::gottung.net/*",
      "Action": "s3:*"
    }
  ]
}
EOF
}

resource "aws_s3_bucket" "www_redirect" {
  bucket = "www.gottung.net"
  website {
    redirect_all_requests_to = "https://gottung.net"
  }
}
