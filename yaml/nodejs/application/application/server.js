var http = require("http");
var os = require('os')

http.createServer(function (request, response) {    
    response.writeHead(200, {'Content-Type': 'text/plain'});
    
    response.end(os.hostname());
    console.log('The server is running from within a container');
 }).listen(80);
 
  