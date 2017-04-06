# JMeter Load Test for Simple PHP Post

This a fairly simple load test was written in JMeter. 
It runs against my server, where a simple PHP program accepts
incoming GET requests and writes the received data into a text file.
The test uses this text file on the server to verify that
data was received properly.

There are 2 separate implemented tests:

1. ``Simple PHP post to text file.jmx``: all 10 threads run independently without any synchronization
2. ``Simple PHP post to text file - rendez.jmx``: all 10 threads synchronize (use a rendezvous point)
   and hit the server (almost) at once.

Each JMX run uses a setup transaction which requests that server clear the text file, to
ensure that previous test runs are cleared.

## Requirements to runs

### Pre-requisites

1. Windows or Linux machine
1. Jmeter 3.1 ([download here](http://jmeter.apache.org/download_jmeter.cgi))

### Actually running

1. Open JMeter
1. Load one of the JMX files
1. Click Run

You can see the results of the test execution on the server here: http://test2.ontytoom.com/postlog.txt

