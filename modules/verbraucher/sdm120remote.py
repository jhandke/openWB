#!/usr/bin/python
import sys
import os
import time
import getopt
import socket
import ConfigParser
import struct
import binascii
verbrauchernr = str(sys.argv[1])
seradd = str(sys.argv[2])
from pymodbus.client.sync import ModbusTcpClient
client = ModbusTcpClient(seradd, port=8899)


sdmid = int(sys.argv[3])

resp = client.read_input_registers(0x0006,2, unit=sdmid)
al1 = struct.unpack('>f',struct.pack('>HH',*resp.registers))
al1 = float("%.3f" % al1[0])
al1string = "/var/www/html/openWB/ramdisk/verbraucher%s_a1" % (verbrauchernr)
f = open(al1string, 'w')
f.write(str(al1))
f.close()

resp = client.read_input_registers(0x000C,2, unit=sdmid)
watt = struct.unpack('>f',struct.pack('>HH',*resp.registers))
watt = int(watt[0])

wattstring = "/var/www/html/openWB/ramdisk/verbraucher%s_watt" % (verbrauchernr)
f = open(wattstring, 'w')
f.write(str(watt))
f.close()


resp = client.read_input_registers(0x0048,2, unit=sdmid)
vwh = struct.unpack('>f',struct.pack('>HH',*resp.registers))
vwh1 = vwh.split(",")[0] 
vwh2 = float(vwh1) * int(1000)
vwh3 = str(vwh2)
vwhstring = "/var/www/html/openWB/ramdisk/verbraucher%s_wh" % (verbrauchernr)
f = open(vwhstring, 'w')
f.write(str(vwh3))
f.close()


resp = client.read_input_registers(0x004a,2, unit=sdmid)
vwhe = struct.unpack('>f',struct.pack('>HH',*resp.registers))
vwhe1 = vwhe.split(",")[0] 
vwhe2 = float(vwhe1) * int(1000)
vwhe3 = str(vwhe2)

vwhestring = "/var/www/html/openWB/ramdisk/verbraucher%s_whe" % (verbrauchernr)
f = open(vwhestring, 'w')
f.write(str(vwhe3))
f.close()




