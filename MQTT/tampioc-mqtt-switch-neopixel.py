from adafruit_circuitplayground import cp
import paho.mqtt.client as mqtt

def on_connect(client, userdata, flags, rc): #function that connect to the broker
    if rc == 0: # if the result code is 0  
        cp.red_led = True # the red led in the device simulator will be turn on 
        client.subscribe("cpx-switch/index/#") # and then sunscribe to the topic "cpx-switch/index/#" (I used wildcard to be able to subscribe to all the topics that are  being publish in the web when the buttons are clicked)

def on_message(client, userdata, msg): #when the program receives certain message
    if msg.payload.decode() == "true":  # if the message in payload is equal to "true"
        if msg.topic == "cpx-switch/index/0": # if the topic is equal to "cpx-switch/index/0"
             cp.pixels[0] = (255,0,0) # the cp pixel at index 0 will be set to color (255,0,0)
        elif msg.topic == "cpx-switch/index/1": # else if the topic is equal to "cpx-switch/index/1"
             cp.pixels[1] = (0,255,0) # the cp pixel at index 0 will be set to color (0,255,0)
        elif msg.topic == "cpx-switch/index/2": # else if the topic is equal to "cpx-switch/index/2"
            cp.pixels[2] = (10,25,50) #the cp pixel at index 0 will be set to color (10,25,50)
    else: # if the message in payload is equal to "false"
        if msg.topic == "cpx-switch/index/0": # if the topic is equal to "cpx-switch/index/0"
             cp.pixels[0] = (0,0,0) # cp pixel at index 0 will be turn off
        elif msg.topic == "cpx-switch/index/1": # else if the topic is equal to "cpx-switch/index/1"
             cp.pixels[1] = (0,0,0) # cp pixel at index 1 will be turn off
        elif msg.topic == "cpx-switch/index/2":  # else if the topic is equal to "cpx-switch/index/2"
            cp.pixels[2] = (0,0,0) # cp pixel at index 2 will be turn off


cp.red_led = False # turn the red led off
client = mqtt.Client() # place the client to a varaible client 
client.on_connect = on_connect #   call the function on_connect
client.on_message = on_message # call the function on_message

client.connect("test.mosquitto.org", 1883, 60) #connect to the broker "test.mosquitto.org"

client.loop_forever()

# Broker for online client: https://iamelijah2016.github.io/
# wss://mqtt.eclipse.org:443/mqtt
# wss://test.mosquitto.org:8081/mqtt