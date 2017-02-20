#!/usr/bin/python
# -*- coding: utf-8 -*-

import RPi.GPIO as GPIO

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)

num1 = 17;
num2 = 18;

GPIO.setup(num1, GPIO.OUT)
GPIO.setup(num2, GPIO.OUT)

print GPIO.input(num1), GPIO.input(num2)
