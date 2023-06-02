 CREATE TABLE buyer (
    buyer_id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
 );

 CREATE TABLE car (
    car_id INTEGER PRIMARY KEY AUTOINCREMENT,
    make VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    rental_rate DECIMAL(10,2) NOT NULL,
    available BOOLEAN NOT NULL,
 );

 CREATE TABLE order(
    order_id INT PRIMARY KEY AUTOINCREMENT,
    buyer_id INT,
    car_id INT,
    rental_start_date DATE NOT NULL,
    rental_end_date DATE NOT NULL,
    total_amount DECIMAL(10,2) NOT NULL,
    status VARCHAR(50) NOT NULL,
    FOREIGN KEY (buyer_id) REFERENCES buyer(buyer_id),
    FOREIGN KEY (car_id) REFERENCES car(car_id)
 );