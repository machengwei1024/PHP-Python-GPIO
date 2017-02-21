#!/usr/bin/python
# -*- coding: utf-8 -*-

import RPi.GPIO as GPIO

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)

num1 = 17

GPIO.setup(num1, GPIO.OUT)
state = GPIO.input(num1)

if (state == 1):
	GPIO.output(num1, GPIO.LOW)
	print "已打开设备"
if (state == 0 ):
	GPIO.output(num1,GPIO.HIGH)
	print "已关闭设备"
