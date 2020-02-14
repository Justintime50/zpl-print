#!/bin/sh

# Install Cups
sudo apt-get install -y cups
sudo usermod -a -G lpadmin pi
sudo /etc/init.d/cups restart
