#!/usr/bin/python
# -*- coding: utf-8 -*-

import RPi.GPIO as GPIO

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)

num2 = 18

GPIO.setup(num2, GPIO.OUT)
state = GPIO.input(num2)

if (state == 1):
	GPIO.output(num2, GPIO.LOW)
	print "已打开设备"
if (state == 0 ):
	GPIO.output(num2,GPIO.HIGH)
	print "已关闭设备"
