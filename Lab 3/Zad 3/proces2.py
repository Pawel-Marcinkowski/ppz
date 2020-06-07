import xmlrpclib
from SimpleXMLRPCServer import SimpleXMLRPCServer
import socket
import sys

server = SimpleXMLRPCServer(('localhost',8080), logRequests=True)

def konwertuj(wejscie):
	wyjscie = hex(wejscie)
	
	socket.connect(adres)
	
	try:
		socket.sendall(wyjscie)
	finally:
		socket.close()
	return wyjscie
	

server.register_function(konwertuj)
socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
adres = ('127.0.0.1', 8000)


if __name__ == '__main__':
	try:
		server.handle_request()
	except KeyboardInterrupt:
			print('Przeslano wiadomosc, proces zakonczy swoje dzialanie')
			
