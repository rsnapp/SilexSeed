This project seed has the basics settings to install apache, mysql server, set up an empty database, and install silex through composer.

Use `git clone --recursive git@github.com:rsnapp/SilexSeed.git`, go into the env folder, type `vagrant up` and you should be ready to go.  You can access the web root (www folder) at `localhost:8080`  

If you change some .json settings (including `composer.json`) be sure to rerun `vagrant provision` which will rerun puppet and update all the config files and update/install your composer packages on the virtual machine.  If you want to ssh into your virtual machine use `vagrant ssh` and once in using `cd dev` should put you in the project root on the virtual machine.  Your files are automatically sync'd between your local machine and your virtual machine.

You'll be able to log into the mysql server through the "silex" user using `mysql -h 127.0.0.1 -usilex -ppass123` or whatever mysql client you prefer. That mysql connection should work on both your local machine and your virtual machine because port 3306 is being forwarded from one to the other. Make sure you shut down your other virtual machines with `vagrant suspend` or `vagrant halt` or `vagrant destroy` if you want to avoid port forwarding collisions.  You can look up the difference between those commands at [http://docs.vagrantup.com/](http://docs.vagrantup.com/).
