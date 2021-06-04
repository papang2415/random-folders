"""
To get started, check out the "Device Simulator Express: Getting Started" command in the command pallete, which you can access with `CMD + SHIFT + P` For Mac and `CTRL + SHIFT + P` for Windows and Linux.

Get started with micro:bit and MicroPython on:
https://microbit-micropython.readthedocs.io/en/latest/.
"""

from microbit import *
import paho.mqtt.client as mqtt

CIRCLE = Image("09990:90009:90009:90009:09990") #set the pixel to image check to be use after

def on_connect(client, userdata, flags, rc):
    if rc == 0: #if the result code is 0
        client.subscribe("microbit") #subscribe to "microbit"
        display.show(Image.YES) #display the image the is declare above code

def on_message(client, userdata, msg): #function the checks the payload message
    if msg.payload.decode() == "north": # if the payload message is "north"
        display.show(Image.ARROW_N) #show the arrow image pointing north
    elif msg.payload.decode() == "south": # if the payload message is "south"
        display.show(Image.ARROW_S) #show the arrow image pointing south
    elif msg.payload.decode() == "west": # if the payload message is "west"
        display.show(Image.ARROW_W) #show the arrow image pointing west
    elif msg.payload.decode() == "east": # if the payload message is "east"
        display.show(Image.ARROW_E) #show the arrow image pointing east
    elif msg.payload.decode() == "northeast": # if the payload message is "notheast"
        display.show(Image.ARROW_NE) #show the arrow image pointing northeast
    elif msg.payload.decode() == "southeast": # if the payload message is "southeast"
        display.show(Image.ARROW_SE) #show the arrow image pointing southeast
    elif msg.payload.decode() == "southwest": # if the payload message is "southwest"
        display.show(Image.ARROW_SW) #show the arrow image pointing southwest
    elif msg.payload.decode() == "northwest": # if the payload message is "northwest"
        display.show(Image.ARROW_NW) #show the arrow image pointing northwest
    elif msg.payload.decode() == "center": # if the payload message is "center"
        display.clear() #clear the display

client = mqtt.Client() 
client.on_connect = on_connect
client.on_message = on_message

client.connect("mqtt.eclipseprojects.io", 1883, 60)

client.loop_forever()

# Broker for online client: https://iamelijah2016.github.io/
# wss://mqtt.eclipse.org:443/mqtt
# wss://test.mosquitto.org:8081/mqtt