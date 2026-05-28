COPYRIGHT NOTICE
Copyright (c) 2001 - 2011, Ketut Aryadana
All Rights Reserved


The original Ardguest website is long gone, but I got this download from the wayback machine.
Due to the script relying on php 4.* and even breaking in 5.*, i modernized it [with roo, bully me]



Script name : ArdGuest
Version : 1.8b
Website : http://web.archive.org/web/20131126073154/http://promosi-web.com/script/guestbook/
Email : aryasmail@yahoo.com.au
Download URL : http://web.archive.org/web/20131126073154/http://promosi-web.com/script/guestbook/download

----------------------------------------------------------------------

Ardguest is a simple PHP guestbook that uses a flatfile to store messages. This script is suitable for anyone who need a guestbook that can be setup quickly.

This code is provided As Is with no warranty expressed or implied. I am not liable for anything that results from your use of this code. You can distribute this freely provided the header and this readme. This code is free for both commercial or non commercial use, as long as my copyright link (http://www.promosi-web.com/script/guestbook/) and the ad's code that supported Ardguest are left intact. If you want to remove the links, you must purchase a lisence (US $18.00 per website). Please visit the following URL for more information :

http://www.promosi-web.com/script/guestbook/lisence.html



To install :
~~~~~~~~~~~~
1. Open index.php with your favorite text editor and change some of the variables so that the script does what you want it to. They should be sufficiently documented in the program file.
2. Make a directory on your server where you want to put the script, eg. guestbook
3. Upload index.php (the guestbook script), image.php (image code generator), ardgb18.dat (guestbook data file), and spamwords.dat (spam words data file) to a directory in ASCII mode. Chmod ardgb18b.dat to 666 (Unix/Linux only), to make the data file writeable or you will get writing permission error.
4. Upload all icons file in binnary mode. The directory structure should be like this :

/guestbook
   |--index.php
   |--image.php
   |--ardgb18b.dat
   |--spamwords.dat
   |--/imgs
         |--del.gif
         |--email.gif
         |--homepage.gif


To use :
~~~~~~~~
Link to the following to sign :
http://www.yourdomain.com/guestbook/index.php?do=add_form

and link to this to view the guestbook :
http://www.yourdomain.com/guestbook/index.php


Hope you find this useful.



Ketut Aryadana
-----------------
Bali, Indonesia
