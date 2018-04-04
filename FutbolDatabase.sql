DROP TABLE IF EXISTS Park_t;
DROP TABLE IF EXISTS Reservation_t;

CREATE TABLE Park_t{
	Park_Id INT NOT NULL, 
	Park_Name VARCHAR(25),
	Park_Address VARCHAR(30),
	Park_Location VARCHAR(30),
	Park_Size VARCHAR(20),
};

CREATE TABLE Reservation_t{.
	Reservation_Id INT NOT NULL,
	Reservation_Name VARCHAR(20),
	Reservation_Date Date,
	Reservation_Time VARCHAR(20),
	Reservation_People INT (5),
	Reservation_Notes VARCHAR(140),
	Park_ID INT,
CONSTRAINT Reservation_PK PRIMARY KEY (Order_ID),
CONSTRAINT Reservation FOREIGN KEY (Park_ID) REFERENCES Park_t(Park_ID));






INSERT INTO Park_t (Park_Id, Park_Name, Park_Address, Park_Location, Park_Size)
VALUES ('5', 'Pagel Park', '365 Hyde Park Ave', 'Roslindale', '5v5');


INSERT INTO Park_t (Park_Id, Park_Name, Park_Address, Park_Location, Park_Size)
VALUES ('6', 'Portsmouth Playground', '335 Portsmouth Street', 'Allston', '7v7');


INSERT INTO Park_t (Park_Id, Park_Name, Park_Address, Park_Location, Park_Size)
VALUES ('7', 'Charlestown High School', '255 Medford St', 'Charlestown', '7v7');


INSERT INTO Park_t (Park_Id, Park_Name, Park_Address, Park_Location, Park_Size)
VALUES ('8', 'Reservation Road Park', '151 Reservation Road', 'Hyde Park', '3v3');


INSERT INTO Park_t (Park_Id, Park_Name, Park_Address, Park_Location, Park_Size)
VALUES ('9', 'Mission Hill Playground', 'Tremont St And Smith St', 'Jamaica Plain' '3v3');


INSERT INTO Park_t (Park_Id, Park_Name, Park_Address, Park_Location, Park_Size)
VALUES ('10', 'Olmsted Park', '217 Jamaicaway', 'Jamaica PLain', '5v5');


INSERT INTO Park_t (Park_Id, Park_Name, Park_Address, Park_Location, Park_Size)
VALUES ('5', 'Pagel Park', '365 Hyde Park Ave', 'Roslindale', '');