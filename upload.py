import mysql.connector
import random
import datetime

mydb = mysql.connector.connect(
    user="root", 
    port="8889",
    password="root", 
    host="localhost", 
    database="flow"
    ) 



s1 = random.randint(50,60);
s2 = random.randint(50,60);
s3 = random.randint(50,60);
id=1;
timestamp = datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')
mycursor = mydb.cursor()


sql = "INSERT INTO sensor (id,sensor1, sensor2, sensor3, timestamp) VALUES (%s,%s, %s, %s, %s)"
val = (id,s1,s2,s3,timestamp);
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")