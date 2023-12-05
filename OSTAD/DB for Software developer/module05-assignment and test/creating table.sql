CREATE TABLE Books (
    ISBN INT PRIMARY KEY,
    Title VARCHAR(255),
    Genre VARCHAR(50),
    PublishedDate DATE,
    InStock INT
);

CREATE TABLE Authors (
    AuthorID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50)
);

CREATE TABLE Customers (
    CustomerID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Email VARCHAR(100)
);

CREATE TABLE Purchases (
    PurchaseID INT PRIMARY KEY,
    PurchaseDate DATE,
    CustomerID INT,
    BookID INT,
    Quantity INT,
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID),
    FOREIGN KEY (BookID) REFERENCES Book(ISBN)
);
