#! /bin/sh

echo "Welcome to the One-Button CDN Installer"
echo "Let's get ready to host some files!"

# Let's create a folder to hold the files we host
echo "Creating containing folder for the files"
mkdir ../files
chmod 775 files
cd ../files

# Let's download the intitial copies of our hosted files

# Bootstrap
echo "Downloading Bootstrap"
mkdir bootstrap
cd bootstrap
curl -o bootstrap.zip https://codeload.github.com/twbs/bootstrap/zip/master
unzip bootstrap.zip
mv bootstrap-master/* ./
rm -R bootstrap-master
rm bootstrap.zip
cd ../

# FontAwesome
echo "Downloading FontAwesome"
mkdir fontawesome
cd fontawesome
curl -o fontawesome.zip https://codeload.github.com/FortAwesome/Font-Awesome/zip/master
unzip fontawesome.zip
mv Font-Awesome-master/* ./
rm -R Font-Awesome-master
rm fontawesome.zip
cd ../

# jQuery
echo "Downloading jQuery"
mkdir jquery
cd jquery
curl -O http://code.jquery.com/jquery-latest.js 
curl -O http://code.jquery.com/jquery-latest.min.js
cd ../

# Let's ascend out of the files directory now that the files are downloaded
cd ../

# Let's create the symbolic links that serve the latest files

echo "Creating symbolic links"

# Bootstrap
ln -s files/bootstrap/dist/css/bootstrap.css bootstrap.css
ln -s files/bootstrap/dist/css/bootstrap.min.css bootstrap.min.css
ln -s files/bootstrap/dist/css/bootstrap-theme.css bootstrap-theme.css
ln -s files/bootstrap/dist/css/bootstrap-theme.min.css bootstrap-theme.min.css
ln -s files/bootstrap/dist/js/bootstrap.js bootstrap.js
ln -s files/bootstrap/dist/js/bootstrap.min.js bootstrap.min.js
echo "Bootstrap hosted"

# FontAwesome
ln -s files/fontawesome/css/font-awesome.css font-awesome.css
ln -s files/fontawesome/css/font-awesome.min.css font-awesome.min.css
ln -s files/fontawesome/css/font-awesome-ie7.css font-awesome-ie7.css
ln -s files/fontawesome/css/font-awesome-ie7.min.css font-awesome-ie7.min.css
ln -s files/fontawesome/font/fontawesome-webfont.eot fontawesome-webfont.eot
ln -s files/fontawesome/font/fontawesome-webfont.ttf fontawesome-webfont.ttf
ln -s files/fontawesome/font/fontawesome-webfont.svg fontawesome-webfont.svg
ln -s files/fontawesome/font/fontawesome-webfont.woff fontawesome-webfont.woff
ln -s files/fontawesome/font/FontAwesome.otf FontAwesome.otf
echo "FontAwesome hosted"

# jQuery
ln -s files/jquery/jquery-latest.js jquery-latest.js
ln -s files/jquery/jquery-latest.min.js jquery-latest.min.js
echo "jQuery hosted"

# Let's remove the firstrun.txt file
rm install/firstrun.txt
