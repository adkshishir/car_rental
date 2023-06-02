-- creating a table for buyer
 
 CREATE TABLE buyer (
    buyer_id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
 );
-- creating table buyer_
 CREATE TABLE car (
    car_id INTEGER PRIMARY KEY AUTOINCREMENT,
    make VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    rental_rate DECIMAL(10,2) NOT NULL,
    available BOOLEAN NOT NULL,
 );
-- creating table orders
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
--  get available cars
select car_id ,make, model, rental_rate
from car 
where available=1;

-- get buyer order
select o.order_id,c.make,c.model,o.rental_start_date,o.rental_end_date,o.total_amount,o.status
from `order` o
join car c ON c.car_id = o.order_id
where o.buyer_id = {buyer_id};

-- get buyer profile
 select name ,email ,phone 
 from buyer 
 where buyer_id = {buyer_id};

--  car details
select make,model,year,renta_rate,available
from car 
where car_id={car_id};


