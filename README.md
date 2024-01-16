![Logo](https://github.com/hamid1ganeh/s3-php.git)

# S3-PHP
Firsrt of all you need to clone the project from this repository.
Then run 2 below conmmand:
```bash
git clone https://github.com/hamid1ganeh/s3-php.git
```
After that acording to [this document](https://docs.aws.amazon.com/AmazonS3/latest/userguide/creating-bucket.html) make a new S3 bucket in aws.

Then please go to public directory and open upload.php file and write you'r aws access_key_id , secret_access_key , bucket and region (bucket is aws S3 Bucket anem and region is the region you defined for bucket).

After taht in order to dawnload docker images execut docker, run follow commands:
```bash
docker-compose build app
```
and then run:
```bash
docker-compose up -d
```
Now you can execute project on [localhost:1991](localhost:1991) 