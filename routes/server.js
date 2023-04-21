const mysql = require('mysql');
const express = require('express');
const bodyParser = require('body-parser');

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'bde_website'
});

connection.connect((err) => {
    if (err) throw err;
    console.log('Connected to MySQL database');
});

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.get('/mytable', (req, res) => {
    const sql = 'SELECT * FROM mytable';
    connection.query(sql, (err, results) => {
        if (err) throw err;
        res.json(results);
    });
});

app.post('/mytable', (req, res) => {
    const data = req.body;
    const sql = 'INSERT INTO mytable SET ?';
    connection.query(sql, data, (err, result) => {
        if (err) throw err;
        res.json({ id: result.insertId });
    });
});

app.listen(3000, () => {
    console.log('Server started on port 3000');
});