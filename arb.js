const http = require('http')    //Pull in a useful node package
                                
const hostname = process.env.hostname || '127.0.0.1'    //get our ip address from the environment
const port = process.env.port || 3001               //and the port

const server =
  http.createServer(            //Creates the response loop
    (req,res)=> {               //Anonymous function to handle the request
      res.statusCode = 200      //code for OK


      res.setHeader('Content-Type', 'text/html') //Set the mime type HTML

      res.write('<html> <head> <title> Amala Reddy Boutique </title> </head>')
      res.write('<body><h1>Countries to visit</h1></body>')
      

      res.write( '<table style="text-align:center" width="100%" border="1">')

      res.write('<tr>')
      res.write('<th>Country</th>')
      res.write('<th>Reason to Visit</th>')
      res.write('<th>No. of Days</th>')
      res.write('</tr>')
      
      
      res.write('<tr>')
      res.write('<td>India</td>')
      res.write('<td>India is Rich in Culture and Heritage and has many ancient buildings</td>')
      res.write('<td>30 Days</td>')
      res.write('</tr>')

      

      res.write('<tr>')
      res.write('<td>Paris</td>')
      res.write('<td>Paris is most attractive way</td>')
      res.write('<td>8 Days</td>')
      res.write('</tr>')


      res.write('<tr>')
      res.write('<td>UAE</td>')
      res.write('<td>UAE is the much Developed Country with Advanced Technology with highest Tourism Rate</td>')
      res.write('<td>18 Days</td>')
      res.write('</tr>')

      res.write('<tr>')
      res.write('<td>Spain</td>')
      res.write('<td>Spain has a Highest Adventure Rate and Heritage Rate with 98% and 95% respectively .</td>')
      res.write('<td>25 Days</td>')
      res.write('</tr>')
      
      res.end('</table></body></html>')  //Close the response
    }                           
)

server.listen(port, hostname, () => {   //Start the server
  console.log(`Server running at http://${hostname}:${port}/`)  //Log the request
})