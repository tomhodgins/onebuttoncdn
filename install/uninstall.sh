#! /bin/sh

echo "Welcome to the OneButton CDN uninstaller"

# Let's remove the files folder
echo "removing files folder"
rm -R ../files

# Now let's remove all of the symbolic links we created

# Bootstrap
rm ../bootstrap.css
echo "removing link to bootstrap.css"
rm ../bootstrap.min.css
echo "removing link to bootstrap.min.css"
rm ../bootstrap-theme.css
echo "removing link to bootstrap-theme.css"
rm ../bootstrap-theme.min.css
echo "removing link to bootstrap-theme.min.css"
rm ../bootstrap.js
echo "removing link to bootstrap.js"
rm ../bootstrap.min.js
echo "removing link to bootstrap.min.js"

# FontAwesome
rm ../font-awesome.css
echo "removing link to font-awesome.css"
rm ../font-awesome.min.css
echo "removing link to font-awesome.min.css"
rm ../font-awesome-ie7.css
echo "removing link to font-awesome-ie7.css"
rm ../font-awesome-ie7.min.css
echo "removing link to font-awesome-ie7.min.css"
rm ../fontawesome-webfont.eot
echo "removing link to fontawesome-webfont.eot"
rm ../fontawesome-webfont.ttf
echo "removing link to fontawesome-webfont.ttf"
rm ../fontawesome-webfont.svg
echo "removing link to fontawesome-webfont.svg"
rm ../fontawesome-webfont.woff
echo "removing link to fontawesome-webfont.woff"
rm ../FontAwesome.otf
echo "removing link to FontAwesome.otf"

# jQuery
rm ../jquery-latest.js
echo "removing link to jquery-latest.js"
rm ../jquery-latest.min.js
echo "removing link to jquery-latest.min.js"

echo "OneButton uninstall complete"

# Let's recreate the firstrun.txt file
touch firstrun.txt
