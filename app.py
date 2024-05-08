from flask import Flask, render_template
import pymysql

app = Flask(__name__)

# Database connection configuration
db_host = 'db'
db_user = 'php_docker'
db_password = 'docker'
db_name = 'cloud_project'

# Connect to the MySQL database
connection = pymysql.connect(host=db_host,
                             user=db_user,
                             password=db_password,
                             db=db_name,
                             charset='utf8mb4',
                             cursorclass=pymysql.cursors.DictCursor)

@app.route('/')
def index():
    with connection.cursor() as cursor:
        query = "SELECT * FROM student"
        cursor.execute(query)
        students = cursor.fetchall()

    return render_template('index.html', students=students)

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')