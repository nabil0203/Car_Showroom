# 🚗 Car Showroom – PHP CRUD Application

A simple **PHP + MySQL** CRUD application for managing car details in a showroom.

This project demonstrates how to perform Create, Read, Update, and Delete operations with a user-friendly interface styled using CSS.

---

## 📌 Features
- 📋 View a list of all cars in a neat table.  
- ➕ Add new cars with brand, model, year, and price.  
- ✏️ Edit car details directly from the table.  
- ❌ Delete cars from the database with confirmation alert.
- 🎨 Clean UI with custom styling (responsive and user-friendly).  

---

## 🛠️ Tech Stack
- **Backend:** PHP (MySQLi)  
- **Database:** MySQL  
- **Frontend:** HTML, CSS


## 📂 Project Structure
```bash
Car-showroom
      │── index.php                   # Show all cars (Read)
      │── add.php                     # Add new car (Create)
      │── edit.php                    # Update car details (Update)
      │── delete.php                  # Delete car (Delete)
      │── db.php                      # Database connection
      │── style.css                   # Styling
      │── car_showroom.sql            # Database script
```

-------------------------------------------------------


## 💾 Database Setup
1. Open `phpMyAdmin` or MySQL CLI.
2. Run the following commands (included in car_showroom.sql):

    ```sql
    -- Create database
    CREATE DATABASE car_showroom;

    -- Switch to database
    USE car_showroom;

    -- Create table
    CREATE TABLE car_details (
        id INT AUTO_INCREMENT PRIMARY KEY,
        brand VARCHAR(100) NOT NULL,
        model VARCHAR(100) NOT NULL,
        year INT NOT NULL,
        price DECIMAL(10,2) NOT NULL
    );

    -- Insert sample data
    INSERT INTO car_details (id, brand, model, year, price) 
    VALUES
    (1, 'Toyota', 'Supra', 2015, 3414540.00),
    (2, 'Nissan', 'GTR', 2007, 992345.00),
    (3, 'BMW', 'M7', 2025, 231232.00);

    ```



## 🚀 How to Run the Project

1. **Clone the repository**
   ```bash
   git clone https://github.com/nabil0203/Car_Showroom.git
   ```

2. **Move the project to your server directory (e.g., `htdocs in XAMPP`)**
    ```bash
    mv car-showroom /xampp/htdocs/
    ```

3. **Start Apache and MySQL from XAMPP.**

4. **Import the `car_showroom.sql` file into your database.**


4. **Run the Project**
    - Visit:
    ```php
    http://localhost/Car_Showroom_Management/
    ```

-----------------------------------------


## 🎮 Usage
- Open the Home Page to view all cars.
- Click + Add New Car to insert a new car into the database.
- Use Edit to update car details.
- Use Delete to remove a car (confirmation alert will appear).

## 🚀 Future Improvements
- ➜] Add user authentication (login/logout system)
- 🔍 Add search & filter functionality.
- 🖼️ Add image upload for cars.
- 🔑 Add authentication (Admin login).
- 📱 Make UI fully responsive.

## 🤝 Contributing
- Contributions, issues, and feature requests are welcome!
- Feel free to fork this repo and submit pull requests.

## 📜 License
This project is open-source and available under the MIT License