-- Create the aircraft table
CREATE TABLE aircraft (
    aircraft_id INT AUTO_INCREMENT PRIMARY KEY,
    aircraft_name VARCHAR(255) NOT NULL,
    aircraft_type VARCHAR(100) NOT NULL
);

-- Create the pilot table
CREATE TABLE pilot (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    rank VARCHAR(50) NOT NULL,
    successful_flights INT DEFAULT 0,
    aircraft_assigned INT
);
INSERT INTO aircraft (aircraft_name, aircraft_type) VALUES
('Falcon X', 'Fighter Jet'),
('Sky King', 'Commercial Jet'),
('Eagle Eye', 'Surveillance Drone'),
('Thunderbolt', 'Cargo Plane'),
('Hawk II', 'Helicopter'),
('Stellar Voyager', 'Spacecraft'),
('Nimbus 500', 'Glider'),
('Crimson Wing', 'Fighter Jet'),
('Ocean Glider', 'Amphibious Plane'),
('Aurora', 'Luxury Jet'),
('Steel Falcon', 'Fighter Jet'),
('Iron Hawk', 'Helicopter'),
('Sky Wanderer', 'Passenger Plane'),
('Phoenix', 'Experimental Aircraft'),
('Shadow Wing', 'Stealth Jet'),
('Comet Rider', 'Spacecraft'),
('Thunder Sky', 'Cargo Plane'),
('Golden Hawk', 'Luxury Jet'),
('Aqua Voyager', 'Amphibious Plane'),
('Blizzard Jet', 'Commercial Jet');

INSERT INTO pilot (first_name, last_name, rank, successful_flights, aircraft_assigned) VALUES
('John', 'Smith', 'Captain', 120, 1),
('Emily', 'Davis', 'First Officer', 45, 2),
('Michael', 'Brown', 'Captain', 98, 3),
('Sarah', 'Johnson', 'Lieutenant', 20, 4),
('James', 'Wilson', 'Major', 150, 5),
('Laura', 'Martinez', 'Captain', 60, 6),
('Robert', 'Garcia', 'Colonel', 200, 7),
('Sophia', 'Clark', 'Lieutenant', 15, 8),
('David', 'Rodriguez', 'Major', 130, 9),
('Mia', 'Lewis', 'Captain', 75, 10),
('Daniel', 'Walker', 'Colonel', 170, 11),
('Ella', 'Hall', 'First Officer', 35, 12),
('William', 'Allen', 'Lieutenant', 10, 13),
('Isabella', 'Young', 'Major', 120, 14),
('Joseph', 'King', 'Captain', 85, 15),
('Olivia', 'Scott', 'Colonel', 180, 16),
('Ethan', 'Green', 'Lieutenant', 25, 17),
('Ava', 'Adams', 'First Officer', 50, 18),
('Christopher', 'Baker', 'Captain', 110, 19),
('Grace', 'White', 'Major', 140, 20);
