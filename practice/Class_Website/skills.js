var http = require('http');
var fs = require('fs');
var express = require('express');
var path = require('path');
 var app = express();

app.use(express.static(path.join(__dirname, '/res')));

function onRequest(request, response) {
	response.writeHead(200,{"Content-Type": "text/html"});
	fs.readFile(__dirname+'/skills.html', null, function(error, data){
		if(error){
			response.writeHead(404);
			response.write('File not Found!!!');
		}
		else {
			response.write(data);
		}
		response.end();
	});
	// response.writeHead(200,{"Content-Type": "text/html"});
	// fs.readFile(__dirname+'/css/skills.css', null, function(error, data){
	// 	if(error){
	// 		response.writeHead(404);
	// 		response.write('Css File not Found!!!');
	// 	}
	// 	else {
	// 		response.write(data);
	// 	}
	// 	response.end();
	// });
}

http.createServer(onRequest).listen(8080);