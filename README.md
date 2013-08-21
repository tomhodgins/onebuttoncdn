#OneButton CDN

Looking for an easy way to keep your copies of Bootstrap, FontAwsome, and jQuery current across multiple websites you build? Or are you looking for a way to speed up the loading time of a website by hosting these libraries on another domain?

OneButton CDN is the easiest way to accomplish both of these, all you need is a good web server, PHP, and a web browser.

Once you have installed OneButton CDN you will see a page that displays the URLs of all of the libraries you are hosting. OneButton CDN automatically detects the location where you have installed it and creates the full URL for you so the links are ready to just copy & paste into your projects.

Any time you want to refresh the hosted files, simply scroll to the bottom of the OneButton page and press the 'Update CDN' button to initiate the update script from the web browser.

TIP: If you wish to secure your OneButton CDN page, the simplest way is by using HTPasswd authentication on the folder where you have installed OneButton CDN. Read more about how to configure HTPasswd authentication on your web server here: http://www.colostate.edu/~ric/htpass.html

###What does OneButton CDN do?

- host Bootstrap, FontAwesome, and jQuery with the press of a button
- refresh files manually from the web browser at any time
- installs on any good web server with PHP

###What doesn't OneButton CDN do?

- geographic distribution like global CDN networks
- host Foundation, Modernizr, or any other great libraries…for now

##Installing OneButton CDN by FTP

####Step 1: Download OneButton CDN
Download OneButton CDN from https://github.com/tomhodgins/onebuttoncdn/archive/master.zip

####Step 2: Extract the archive
You should be able to extract the ZIP archive using software already installed on your system (or using http://www.7zip.com for any Windows users)

####Step 2: Upload the folder
Upload the extracted OneButton CDN folder to the location on your web server where you wish to install it using your FTP client

####Step 4: Browser-based installation
Visit the location where you uploaded OneButton CDN in your browser and press the 'Deploy' button to install OneButton CDN

##Installing OneButton CDN by command line interface

####Step 1: Download OneButton
```
$ git clone https://github.com/tomhodgins/onebuttoncdn.git
```
####Step 2: Browser-based installation
Visit the location where you downloaded OneButton CDN from your browser and press the 'Deploy' button to install OneButton CDN

##Updating OneButton CDN through the browser

####Step 1: Press the 'Update CDN' button
Visit the location where you have installed OneButton CDN in your web browser, scroll to the bottom of the page and press the 'Update CDN' button to initiate the update script from the browser

##Updating OneButton CDN by command line interface

####Step1: Move into the 'update' folder
OneButton CDN has an update script that can be accessed from the command line at any time. This script is located in the 'update' folder, so lets move there before we run the script
```
$ cd update
```

####Step 2: Run the update script
Runnning the update script will remove any hosted files and download fresh copies of the files. The shortcuts remain intact and are only temporarily unavailable during the time between when the files are deleted and when the new files are downloaded (typically a matter of seconds)
```
$ sh update.sh
```

##Uninstalling OneButton CDN by FTP

####Step 1: Delete the 'files' folder
Log into the location where you installed OneButton CDN in your FTP client and delete the 'files' folder and all of its contents

####Step 2: Replace the firstrun.txt file
Move into the 'install' folder and create a file named 'firstrun.txt' here to restore the installation process that displayed the first time you visited OneButton CDN

####Step X: To remove OneButton CDN entirely
To remove OneButton CDN entirely, simply delete the folder that contains all of OneButton CDNs files in your FTP client

##Uninstalling OneButton CDN by command line interface

####Step 1: Move into the 'install' folder
OneButton CDN actually has install and uninstall scripts that can be accessed from the command line at any time. These scripts are located in the 'install' folder, so lets move there first before we run either script
```
$ cd install/
```
####Step 2: Run the uninstall script
Running the uninstall script will remove any hosted files as well as the shortcuts that were created to host them, lets execute that script now
```
$ sh uninstall.sh
```
####Step X: To remove OneButton CDN entirely
To remove OneButton CDN entirely, simply delete the folder that contains all of OneButton CDNs files from the command line
```
$ rm -rf onebuttoncdn/
```
##Troubleshooting

####OneButton CDN Won't Install
For this script to work it's essential that the files are owned by the same user as your web server, and that your web server has write permission all the way into the folder where these files are hosted. For me on my web server, the default user for apache is 'www-data' in the group 'www-data', so on the command line I can do something like this to change the user and group ownership of that folder to ensure that the server it will have the access it requires
```
$ chown www-data:www-data onebuttoncdn/
$ chown www-data:www-data onebuttoncdn/*
```
####Permission denied trying to access hosted files
If you are having difficulties accessing the files, try changing the permissions to 755 on the command line or through your FTP client
```
$ chmod 755 onebuttoncdn/
$ chmod 755 onebuttoncdn/*
```

####Windows server doesn't support *nix shell scripting
OneButton CDN uses *nix shell scripting (which means I write it once and it works on Unix/Linux/BSD/OS X servers alike) but won't run on Windows without software like Cygwin to run the *nix shell commands. I am curious if this runs on a Windows-based server using Cygwin, so if you have success with this on a Windows server let me know!

##Roadmap
I'm thinking of ways to expand this to make it the most useful to the most people. I'm thinking of adding the palette.css file from the Boilerstrap project (http://getboilerstrap.com/palette) which is hosted here:
http://getboilerstrap.com/wp-content/themes/boilerstrap/css/palette.css

I'm also hosting a bookmarklet on my copy of OneButton CDN that I use for easy in-browser element inspection and site debugging, I'm just not sure if that should be split into a separate project, or linked into this one since it's aimed at the same users. If you're curious about checking it out early, create a bookmark with the location set to the address of this file: http://cdn.staticresource.com/codeview.js

##Contact
Feel free to send your fan mail, love letters, postcards, care packages, cookies, and haikus to any of the following places

twitter: @innovati<br>
email: tomhodgins@gmail.com<br>
web: http://tomhodgins.com
