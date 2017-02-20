#!/usr/bin/python
# -*- coding: utf-8 -*-

import RPi.GPIO as GPIO

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)

num = 17

GPIO.setup(num, GPIO.OUT)
state = GPIO.input(num)

if (state == 1):
	GPIO.output(num, GPIO.LOW)
	print "已打开设备"
if (state == 0 ):
	GPIO.output(num,GPIO.HIGH)
	print "已关闭设备"
