DROP TABLE IF EXISTS Park_t;
DROP TABLE IF EXISTS Reservation_t;

CREATE TABLE Park_t{
	Park_ID INT NOT NULL, 
	Park_Name VARCHAR(25),
	Park_Address VARCHAR(30),
	Park_Location VARCHAR(30),
	Park_Size VARCHAR(20),
};

CREATE TABLE Reservation_t{.
	Reservation_ID INT NOT NULL,
	Reservation_Name VARCHAR(20),
	Reservation_Date Date,
	Reservation_Time VARCHAR(20),
	Reservation_People INT (5),
	Reservation_Notes VARCHAR(140),
	Park_ID INT,
CONSTRAINT Reservation_PK PRIMARY KEY (Order_ID),
CONSTRAINT Reservation FOREIGN KEY (Park_ID) REFERENCES Park_t(Park_ID));
}