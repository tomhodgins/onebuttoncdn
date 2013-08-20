#! /bin/sh

echo "Welcome to the OneButton CDN"

# Let's move into the folder where we host the files for the CDN
rm -R ../files
mkdir ../files
chmod 775 files
cd ../files

# Let's download the intitial copies of our hosted files

# Bootstrap
echo "Updating Bootstrap"
mkdir bootstrap
cd bootstrap
curl -o bootstrap.zip https://codeload.github.com/twbs/bootstrap/zip/master
unzip -q bootstrap.zip
mv bootstrap-master/* ./
rm -R bootstrap-master
rm bootstrap.zip
cd ../

# FontAwesome
echo "Updating FontAwesome"
mkdir fontawesome
cd fontawesome
curl -o fontawesome.zip https://codeload.github.com/FortAwesome/Font-Awesome/zip/master
unzip -q fontawesome.zip
mv Font-Awesome-master/* ./
rm -R Font-Awesome-master
rm fontawesome.zip
cd ../

# jQuery
echo "Updating jQuery"
mkdir jquery
cd jquery
curl -O http://code.jquery.com/jquery-latest.js 
curl -O http://code.jquery.com/jquery-latest.min.js
cd ../

# All done
echo "OneButton CDN Update Complete"
