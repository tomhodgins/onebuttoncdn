#OneButton CDN

OneButton CDN is the easiest way to host your own Bootstrap, FontAwesome, and jQuery for use in your own projects.

##What does OneButton CDN do?

- [x] host Bootstrap,  FontAwesome, and jQuery with the press of a button
- [x] refresh files manually at any time easily
- [x] installs on any server with PHP

##What doesn't OneButton CDN do?

- [ ] geographically balanced distribution
- [ ] host Foundation, Modernizr, or other great libraries for the moment

##Installing OneButton CDN by FTP

###Step 1: Download OneButton CDN
Download OneButton CDN from https://github.com/tomhodgins/onebuttoncdn/archive/master.zip

###Step 2: Extract the archive
You should be able to extract the archive using software already installed on your system (or using something like http://www.7zip.com for any Windows users looking for a good free extraction tool)

###Step 2: Upload the archive
Upload the extracted OneButton CDN folder and files to the intended location on your web server using your FTP client

###Step 4: Browser-based installation
Visit the location where you uploaded OneButton CDN in your browser and press the 'Deploy' button to begin hosting files

##Installing OneButton CDN by command line interface

###Step 1: Download OneButton
```
$ git clone https://github.com/tomhodgins/onebuttoncdn.git
```
###Step 2: Browser-based installation
Visit the location where you uploaded OneButton CDN in your browser and press the 'Deploy' button to begin hosting files


##Uninstalling OneButton CDN by FTP

###Step 1: Delete the 'files' folder
Log into the location where you installed OneButton CDN in your FTP client and delete the 'files' folder and all of its contents

###Step 2: Replace the firstrun.txt file
Move into the 'install' folder and create a file named 'firstrun.txt' here to restore the installation process that displayed the first time you visited OneButton CDN

###Step x: To remove OneButton CDN entirely
To remove OneButton CDN entirely, simply delete the folder that contains all of OneButton CDNs files in your FTP client

##Uninstalling OneButton CDN by command line interface

###Step 1: Move into the 'install' folder
OneButton CDN actually has install and uninstall scripts that can be accessed from the command line at any time. These scripts are located in the 'install' folder, so lets move in there first before we run them
```
$ cd install
```
###Step 2: Run the uninstall script
Running the uninstall script will remove any hosted files as well as the shortcuts that were created to host them, lets execute that script now
```
$ sh uninstall.sh
```
###Step X: To remove OneButton CDN entirely
To remove OneButton CDN entirely, simply delete the folder that contains all of OneButton CDNs files from the command line
```
$ rm -rf onebuttoncdn
```
##Troubleshooting
###OneButton CDN Won't Install
For this script to work it's essential that the files are owned by the same user as your web server, and that your web server has write permission all the way into the folder where these files are hosted. For me on my web server, the default user for apache is 'www-data', so on the command line I can do something like this to change the user of that folder to ensure that it will have the access it needs
```
$ sudo chown www-data:www-data onebuttoncdn/*
```
###Permission denied trying to access hosted files
If you are having difficulties accessing the files, try changing the permissions to 755 on the command line or through your FTP client
```
$ sudo chmod 755 onebuttoncdn/*
```
