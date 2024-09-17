// Import required modules
const express = require('express');
const mysql = require('mysql');
const session = require('express-session');
const path = require('path');

// Create a connection to the MySQL database
const connection = mysql.createConnection({
    host: 'localhost',        // MySQL server address
    user: 'root',             // MySQL username
    password: 'root@123',             // MySQL password
    database: 'nodelogin'     // Name of the database
});

// Connect to the database
connection.connect(function(err) {
    if (err) {
        console.error('Error connecting to the database:', err);
        return;
    }
    console.log('Connected to the database.');
});

// Initialize Express app
const app = express();

// Set up session middleware
app.use(session({
    secret: 'secret',          // Session secret
    resave: true,              // Force session to be saved back to the session store
    saveUninitialized: true    // Save a session that is new but not modified
}));

// Middleware to parse JSON and URL-encoded data
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Serve static files (e.g., CSS) from the "static" directory
app.use(express.static(path.join(__dirname, 'static')));

// Route to serve the login form
app.get('/', function(request, response) {
    response.sendFile(path.join(__dirname, 'login.html'));
});

// Route to handle login authentication
app.post('/auth', function(request, response) {
    let username = request.body.username;
    let password = request.body.password;
    
    if (username && password) {
        // Query the database for the username and password
        connection.query('SELECT * FROM accounts WHERE username = ? AND password = ?', [username, password], function(error, results) {
            if (error) {
                console.error('Database query error:', error);
                response.send('An error occurred. Please try again later.');
                response.end();
                return;
            }
            
            // Check if the account exists
            if (results.length > 0) {
                // Set session variables
                request.session.loggedin = true;
                request.session.username = username;
                // Redirect to the home page
                response.redirect('/home');
            } else {
                // Send an error message if the credentials are incorrect
                response.send('Incorrect Username and/or Password!');
            }
            response.end();
        });
    } else {
        // Send an error message if fields are empty
        response.send('Please enter Username and Password!');
        response.end();
    }
});

// Route to display a welcome message to logged-in users
app.get('/home', function(request, response) {
    if (request.session.loggedin) {
        response.send('Welcome back, ' + request.session.username + '!');
    } else {
        response.send('Please login to view this page!');
    }
    response.end();
});

// Start the server on port 3000
app.listen(3000, () => {
    console.log('Server running on http://localhost:3000');
});
