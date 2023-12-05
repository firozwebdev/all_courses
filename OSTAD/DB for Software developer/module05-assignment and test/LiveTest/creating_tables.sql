CREATE TABLE Users (
    UserID INT PRIMARY KEY,
    Username VARCHAR(50),
    Password VARCHAR(50),
    Email VARCHAR(100)
);

CREATE TABLE MenuItems (
    ItemID INT PRIMARY KEY,
    Name VARCHAR(100),
    Price DECIMAL(10, 2),
    Description text
);

CREATE TABLE Orders (
    OrderID INT PRIMARY KEY,
    UserID_Users INT,
    Status VARCHAR(20),
    OrderDate DATE,
    FOREIGN KEY (UserID_Users) REFERENCES Users(UserID)
);

CREATE TABLE OrderItems (
    OrderItemID INT PRIMARY KEY,
    OrderID_Orders INT,
    ItemID_MenuItems INT,
    Quantity INT,
    FOREIGN KEY (OrderID_Orders) REFERENCES Orders(OrderID),
    FOREIGN KEY (ItemID_MenuItems) REFERENCES MenuItems(ItemID)
);

CREATE TABLE Photos (
    PhotoID INT PRIMARY KEY,
    ItemID_MenuItems INT,
    FilePath VARCHAR(255),
    FOREIGN KEY (ItemID_MenuItems) REFERENCES MenuItems(ItemID)
);