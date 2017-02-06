# JMeter Load Test for Simple PHP Post

This a fairly simple load test was written in JMeter. 
It runs against my server, where a simple PHP program accepts
incoming GET requests and writes the received data into a text file.
The test uses this text file on the server to verify that
data was received properly.

## Requirements to runs

### Pre-requisites

1. Windows or Linux machine
1. Jmeter 3.1 ([download here]([http://jmeter.apache.org/download_jmeter.cgi))

### Actually running

1. Open JMeter
1. Load the JMX file
1. Click Run

You can see the results of the test execution on the server here: http://test2.onty.us/postlog.txt

