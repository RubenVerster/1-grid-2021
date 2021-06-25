const express = require('express')

const app = express()

const phpExpress = require('php-express')({
  binPath: 'php'
})

app.set('views', './src')
app.engine('php', phpExpress.engine)
app.set('view engine', 'php')

app.use(express.static('public'))

app.use((req, res, next) => {
  res.setHeader('Application-Control-Allow-Origin', '*')
  res.setHeader(
    'Application-Control-Allow-Methods',
    'PUT, POST, DELETE, GET, OPTIONS, PATCH'
  )
  res.setHeader(
    'Application-Control-Allow-Headers',
    'Content-Type, Authorization'
  )

  if (req.method == 'OPTION') {
    return res.status(200)
  }
  next()
})

app.all('*.php', phpExpress.router)

var server = app.listen(3000, function () {
  var host = 'localhost'
  var port = server.address().port
  console.log('local dev server listening on http://%s:%s', host, port)
})
