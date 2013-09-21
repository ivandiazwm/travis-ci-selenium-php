#!/bin/bash

Xvfb :99 -ac &
DISPLAY=:99 java -jar selenium-server-standalone-2.31.0.jar -htmlSuite *firefox http://127.0.0.1/ /vagrant_data/SeleniumTest/tests.html /vagrant_data/public/result.html
