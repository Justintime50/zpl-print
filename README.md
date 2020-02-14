# ZPL Print

Print a ZPL label from a web interface.

[![Build Status](https://travis-ci.org/Justintime50/zpl-print.svg?branch=master)](https://travis-ci.org/Justintime50/zpl-print)
[![MIT Licence](https://badges.frapsoft.com/os/mit/mit.svg?v=103)](https://opensource.org/licenses/mit-license.php)

ZPL Print allows for non-networked ZPL printers to allow users to upload a `.zpl` file and print a ZPL label wirelessly via a local web interface.

## Install

1. Setup on a `Raspberry Pi` with a dedicated IP address connected to a ZPL printer such as the ZPL 450.
1. Open an innocous port such as 3000, 8000, or 8888 and point it to the Pi.
1. Configured CUPS, adding the printer.
1. Change the printer name in `src/config.php`.
1. Run `docker-compose up -d` on the Pi in the directory of this project.

## Usage

1. Navigate to the IP and port of your Pi (eg: `192.168.0.23:8888`).
1. Upload a ZPL file and it will print.

### Cups UI

Go to the IP of the Raspberry Pi and port 631:

Remote - eg: `192.168.0.23:631`
Local - eg: `127.0.0.1:631`

Configuration help [here](https://www.howtogeek.com/169679/how-to-add-a-printer-to-your-raspberry-pi-or-other-linux-computer/).
